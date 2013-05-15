<?php

class Help extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');		
		$this->view->render('help/index');	
        $this->view->render('layout/footer');		
	}

	public function other($arg = false) {
		
		require 'models/help_model.php';
		$model = new Help_Model();
		$this->view->blah = $model->blah();
		
	}

}