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

    function register() 
    {    
        $this->view->title = 'Login';
        
        $this->view->render('welcome/header');
        $this->view->render('login/register');
        $this->view->render('layout/footer');
    }

	public function createaccount() 
	{
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['email'] = $_POST['email'];
		$data['skype'] = $_POST['skype'];
		$data['telefonnr'] = $_POST['telefonnr'];
		// @TODO: Do your error checking!
		
		$this->model->createaccount($data);
		header('location: ' . URL . 'login/welcome');
	}
	
    function welcome() 
    {    
        $this->view->title = 'Login';
        
        $this->view->render('login/header');
        $this->view->render('login/welcome');
        $this->view->render('layout/footer');
    }
	
    function logout()
    {
		Session::set('loggedIn', false);
		Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }

}