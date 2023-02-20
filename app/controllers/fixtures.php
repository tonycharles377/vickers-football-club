<?php

class Fixtures extends controller
{
    function index()
    {
        $data['page_title'] = "fixtures";

        $this->view("vickers/fixtures",$data);
    }

}