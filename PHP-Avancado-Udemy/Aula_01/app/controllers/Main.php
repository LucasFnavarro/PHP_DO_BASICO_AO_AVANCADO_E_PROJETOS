<?php

namespace app\Controllers;
use app\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
       $this->view("layouts/html_header");
       $this->view("home");
       $this->view("layouts/html_footer");
    }
}   