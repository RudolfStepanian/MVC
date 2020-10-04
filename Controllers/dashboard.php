<?php

class Dashboard extends Controller {

    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
    }

    function index(){
        $this->view->render('dashboard/index');
    }
}
