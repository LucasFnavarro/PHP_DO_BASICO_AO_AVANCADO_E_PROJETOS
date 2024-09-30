<?php 

namespace app\Controllers;

abstract class BaseController
{
    public function view($view, $data = [])
    {
       /// checa se data é um array
       if(!is_array($data)){
        die('Data não é um array.' . var_dump($data));
       }

       // transforma os valores do data em variavel 
       extract($data);

       if(file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
       }else{
            die("A view não existe " . $view);
       }
    }
}