<?php

class Players extends controller
{
    function index()
    {
        $data['page_title'] = "players";

        $this->view("vickers/players",$data);
    }

}