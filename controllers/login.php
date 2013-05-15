<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    function index() 
    {    
        $this->view->title = 'Login';
        
        $this->view->render('login/header');
        $this->view->render('login/index');
        $this->view->render('layout/footer');
    }
    
    function run()
    {
        $this->model->run();
    }

    function logout()
    {
		Session::set('loggedIn', false);
		Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }

}