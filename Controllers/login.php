<?php

class Login extends Controller {
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('login/index');
    }

    function run(){
        $this->model->run();
    }
}
