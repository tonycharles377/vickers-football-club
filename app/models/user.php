<?php

class User
{
    function login($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password']))
        {

            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];

            $query = "select * from users where username = :username && password = :password limit 1";
            $data = $DB->read($query, $arr);

            if(is_array($data))
            {
                //logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
            }else{
                $_SESSION['error'] = "wrong username or password";
            }
        }else{
            $_SESSION['error'] = "Please enter a valid username and password";
        }
    }

    function signup($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password']))
        {

            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];

            $query = "insert into users (username,password,email) values (:username,:password,:email)";
            $data = $DB->write($query, $arr);

            if($data)
            {
                header("location:". ROOT . "login");
                die;
            }
        }else{
            $_SESSION['error'] = "Please enter a valid username and password";
        }
    }

    function check_logged_in()
    {
        $DB = new Database();
        if(isset($_SESSION['user_url']))
        {
            $arr['user_url'] = $_SESSION['user_url'];

            $query = "select * from users where user_url =  :user_url limit 1";
            $data = $DB->read($query, $arr);

            if(is_array($data))
            {
                //logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;
    }
}