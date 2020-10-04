<?php

class myError extends Controller {
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->msg = "this page does not exist";
        $this->view->render('error/index');
    }

    function run(){
        $this->model->run();
    }
}