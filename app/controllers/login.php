<?php

class Login extends controller
{
    function index()
    {
        
        $data['page_title'] = "login";

        if(isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->signup($_POST);
        }elseif(isset($_POST['username']) && !isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->login($_POST);
        }

        $this->view("minima/login",$data);
    }

}