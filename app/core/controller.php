<?php

class controller
{

    protected function view($view,$data = [])
    {
        if(file_exists("../app/views/". $view .".php"))
        {
            include "../app/views/". $view .".php";
        }else{
            include "../app/views/404.php";
        }
    }

    protected function loadMode($model)
    {
        if(file_exists("../app/views/". $model .".php"))
        {
            include "../app/views/". $model .".php";
            return $model = new $model();
        }

        return false;
    }
}