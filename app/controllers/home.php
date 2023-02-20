<?php

class Home extends controller
{
    function index()
    {
        
        $data['page_title'] = "home";

        $this->view("vickers/index",$data);
    }

}
