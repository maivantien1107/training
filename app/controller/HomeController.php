<?php
namespace App\Controller;
use App\Controller\DefaultController;
use App\Controller\Controller;

class HomeController extends DefaultController implements Controller{
    public function __render(){
        require_once ROOT . DS . 'Views' . DS . 'home.php';
    }
}
