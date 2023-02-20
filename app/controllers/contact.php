<?php

class Contact extends controller
{
    function index()
    {
        $data['page_title'] = "contact";

        $this->view("vickers/contact",$data);
    }

}