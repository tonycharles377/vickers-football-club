<?php

class Login extends controller
{
    function index()
    {
        
        $data['page_title'] = "Login";

        $this->view("vickers/login",$data);
    }

}
