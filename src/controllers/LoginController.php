<?php
namespace src\controllers;

use \core\Controller;

class LoginController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function signin(){
        echo 'login';
    }

    public function signup(){
        echo 'cadastro';
    }


}