<?php

class Blog extends controller
{
    function index()
    {
        $data['page_title'] = "blog";

        $this->view("vickers/blog",$data);
    }

}