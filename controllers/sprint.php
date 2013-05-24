<?php

class Sprint extends Controller {
	
	function __construct() {
		parent::__construct();
		Auth::handleLogin();		
	}
	
	function sprint($id) {
	
		$this->view->selectSprint = $this->model->selectSprint($id);
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/sprint');	
        $this->view->render('layout/footer');		
		
		
	}
	public function create() 
	{
		$data = array(
			'idProject' => $_POST['idProject'],
			'date_from' => $_POST['date_from'],
			'date_to' => $_POST['date_to']
		);
		$this->model->create($data);
		header('location: ' . URL . 'project/sprint/'. $_POST['idProject']);
	}
	
	
}