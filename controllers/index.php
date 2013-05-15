<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	function index() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');		
		$this->view->render('index/index');
        $this->view->render('layout/footer');
	}
	
	function tiles() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('index/tiles');
        $this->view->render('layout/footer');
	}

}