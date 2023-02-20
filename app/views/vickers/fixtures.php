<?php $this->view("vickers/header",$data); ?>

<?php
    
	/*To get the standings fixtures the line below*/
    $responseB = get_fixtures('vickers');
	  $fixtures_men = $responseB['fixtures'];
    ///echo'<pre>'; print_r($fixtures); echo'</pre>';
	///exit;
	/*to get the team logos, replace "TEAM-ID with the team_id as defined in the response" in the url below*/
	//<img href="https://www.fkfleagues.co.ke/assets/img/logos/TEAM-ID.jpg" />
	
	

?>

<body>
  <div class="hero overlay" style="background-image: url('<?=ASSETS?>vickers/images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Fixtures</h1>
            <div class="boot" role="navigation">
              <ul class="nav justify-content-center" >
                <li class="nav-item">
                  <a class="nav-link" href="#">Vickers Men</a>
                </li>
                <span>|</span>
                <li class="nav-item">
                  <a class="nav-link" href="#">Vickers Queens</a>
                </li>
              </ul>
                
            </div>
            
          </div>
        </div>
      </div>
  </div>

    
    
  <div class="container">
  
    <div class="site-section bg-dark">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Fixtures</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                  <table class="table">
                    <tbody>
                      <?php foreach($fixtures_men AS $row){ 
                        if($row['outcome'] == ''){
                          $disp = date("g:ia",strtotime($row['fixtureTime']));
                        }else{
                          $disp = $row['hostGoals'].' - '.$row['guestGoals'];
                        }
                        ?>
                        <tr>
                          <th scope="row"><?php echo format_date($row['fixtureDate']);?></th>
                          <td class="text-right"><?php echo $row['host'];?></td>
                          <td><img src="https://www.fkfleagues.co.ke/assets/img/logos/<?php echo $row['hostId']?>.jpg" height="20" width="20" /></td>
                          <td class="text-center"><?php echo $disp;?></td>
                          <td><img src="https://www.fkfleagues.co.ke/assets/img/logos/<?php echo $row['guestId']?>.jpg" height="20" width="20" /></td>
                          <td><?php echo $row['guest'];?></td>
                          <td><?php echo $row['venue'];?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>

        <!--<div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Fixtures</h2>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_1.png" alt="Image">
                        <h3>Football League</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_2.png" alt="Image">
                        <h3>Soccer</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>

                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_3.png" alt="Image">
                        <h3>Football League</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_4.png" alt="Image">
                        <h3>Soccer</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>

                </div>
              
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_1.png" alt="Image">
                        <h3>Football League</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_2.png" alt="Image">
                        <h3>Soccer</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>

                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_3.png" alt="Image">
                        <h3>Football League</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="<?=ASSETS?>vickers/images/logo_4.png" alt="Image">
                        <h3>Soccer</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>

                </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div> --> <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Videos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Dogba set for Juvendu return?</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Dogba set for Juvendu return?</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container site-section">
      
    </div>

<?php $this->view("vickers/footer",$data); ?>