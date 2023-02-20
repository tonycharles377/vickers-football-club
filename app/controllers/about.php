<?php

class About extends controller
{
    function index()
    {
        $data['page_title'] = "About";

        $this->view("vickers/about",$data);
    }

}