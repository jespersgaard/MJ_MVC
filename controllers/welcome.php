<?php

class Welcome extends Controller {

	function __construct() {
		parent::__construct();
		
	}
	
	function index() {
        $this->view->render('welcome/header');
		$this->view->render('welcome/index');
        $this->view->render('layout/footer');		
	}
	
	
	
}