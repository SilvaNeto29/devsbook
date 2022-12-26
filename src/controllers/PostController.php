<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
class PostController extends Controller {

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if(LoginHandler::checkLogin() == false){
            $this->redirect('/login');
        }
    }

    public function new() {
        $body = filter_input(INPUT_POST, 'body');
        echo "CORPO ".$body. "  ID - ".$this->loggedUser->id;
    }

}