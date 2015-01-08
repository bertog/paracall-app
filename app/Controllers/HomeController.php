<?php

namespace App\Controllers;

use Paracall\Controllers\Controller;

class HomeController extends Controller{

    public function index(){

        return $this->renderView('home');

    }

}