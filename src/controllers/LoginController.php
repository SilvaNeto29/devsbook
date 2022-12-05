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
        $this->render('login');
    }

    public function signinAction(){
        echo 'login - recebido';
    }

    public function signup(){
        echo 'cadastro';
    }


}