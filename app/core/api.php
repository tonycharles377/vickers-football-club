<?php

    function config_data($user=NULL){
         /*Replace with provided values*/
		$array['vickers'] = array(
							'secret' => 'v1ckeRs',
							'apikey' => 'gfghfddfgfgg/?hggggvx&vb'
						);
		$array['vickers queens'] = array(
							'secret' => 'v1ckeRs_QueeNs',
							'apikey' => 'gfgh/&&8674_54gfgg/?hgggP&vb'
						);
						
		/*do not change values below*/
		if($user != NULL){
			$config = $array[$user];
		}else{
			$user = key($array);
			$config = $array[$user];
		}
        $config['apiurl'] = "https://www.fkfadmin.fkfleagues.co.ke/api/";
        $config['encrypt_method'] = "AES-256-CBC";
        return $config;
    }

    function get_standings($user=NULL){
        $data = array ( "api" => "getLeagueStandings", "user" => $user );
        $result = request_data($data);
        return $result;
    }

    function get_fixtures($user=NULL){
        $data = array ( "api" => "getTeamFixtures", "user" => $user );
        $result = request_data($data);
        return $result;
    }

	function receive_data($user=NULL){ //Received fixture results update
		$config = config_data($user);
		$data = json_decode(file_get_contents('php://input'), true);
		$datapass = encrypt_decrypt( $data['security']['signature'], $action = 'decrypt',$data['security']['requestId'],$user);
		if($datapass !== $config['apikey']){//handle error
			/*HANDLE ERROR HERE*/
	      	//echo 'error Invalid API RequestID:'.$data['security']['requestId'].' , signature: '.$data['security']['signature'];
	    }else{//api validation passed
			/*PROCESS FIXTURE UPDATE HERE*/
	      	//echo 'error, Correct API RequestID:'.$data['security']['requestId'].' , signature: '.$data['security']['signature'];
	      	//echo 'error, Decrypted token: '.$datapass;
	    }
		
	}
    

	function request_data($payload){
		$config = config_data($payload['user']);
		$url = $config['apiurl'].$payload['api'];
        $request_id = 'req_'.bin2hex(random_bytes(20));//provide cryptographic random string for each request
		$enq_signature = encrypt_decrypt($config['apikey'], 'encrypt', $request_id, $payload['user']);
		$data = array(
		    "requestId" => $request_id, 
		    "secret" => $config['secret'], 
		    "signature" => $enq_signature, 
		    "apiVersion" => "1.0" 
		   );
        $result = curl_get_contents($url,$data);
       if ($result === FALSE) { 
			/* Handle error*/
			echo 'Curl execution error';exit;
       }else{
		   //process the response
            $return = json_decode($result,TRUE);
			if($return['status'] != 'success'){
				die($return['status'].':'.$return['message']);
			}
			return $return;
			
       }
		
	}
	
    function curl_get_contents($url, $data){
        $ch = curl_init();
        $payload = json_encode( $data);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	   curl_setopt($ch, CURLOPT_TIMEOUT, 6);
       curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
       $return = curl_exec($ch);
       curl_close($ch);
       return $return;
    }
 
    /*Encrypt and decrypt*/
    function encrypt_decrypt($string = NULL, $action = 'encrypt', $request_id = NULL, $user=NULL){
		$config = config_data($user);
        $key = hash('sha256', $request_id);
        $iv = substr(hash('sha256', $config['secret']), 0, 16); 
        if ($action == 'encrypt') { 
            $output = openssl_encrypt($string, $config['encrypt_method'], $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $config['encrypt_method'], $key, 0, $iv);
        }
        return $output;
    }

	/*To get the standings excecue the line below*/
    //$responseA = get_standings();
	//$standings = $responseA['standings'];
    ///echo'<pre>'; print_r($standings); echo'</pre>';
    
	/*To get the standings fixtures the line below*/
    //$responseB =	get_fixtures('vickers-queens');
	//$fixtures = $responseB['fixtures'];
    ///echo'<pre>'; print_r($fixtures); echo'</pre>';
	///exit;
	/*to get the team logos, replace "TEAM-ID with the team_id as defined in the response" in the url below*/
	//<img href="https://www.fkfleagues.co.ke/assets/img/logos/TEAM-ID.jpg" />
	
	

?>
