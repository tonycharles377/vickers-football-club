<?php

class Signup extends controller
{
    function index()
    {
        
        $data['page_title'] = "Signup";

        $this->view("vickers/signup",$data);
    }

}
