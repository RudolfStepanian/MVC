<?php

class Help extends Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('help/index');
    }

    public function other($arg = false){

        require 'Model/help_model.php';
        $model =  new help_model();
        $this->view->blah = $model->blah();
    }
}
