<?php

class Project extends Controller {

	function __construct() {
		parent::__construct();
		Auth::handleLogin();		
	}
	
	function index() {
		$this->view->project_list_mine = $this->model->project_list_mine();	
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/index');	
        $this->view->render('layout/footer');		
	}
	function index_gitter() {
		$this->view->project_list_mine = $this->model->project_list_mine();	
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/index_gitter');	
        $this->view->render('layout/footer');		
	}	
 	function project_all() {
		$this->view->project_all = $this->model->project_all();
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/project_all');	
        $this->view->render('layout/footer');			
	}   
	
	function project_gitter() {
		$this->view->project_all = $this->model->project_all();	
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/project_gitter');	
        $this->view->render('layout/footer');		
	}

	function intro($id) {
		$this->view->project = $this->model->selectProject($id);
	
		if (empty($this->view->project)) {
			die('This is an invalid note!');
		}
		
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/intro');	
        $this->view->render('layout/footer');		
	}

	function members() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/members');	
        $this->view->render('layout/footer');		
	}
	
	function task() {
		$this->view->selectTask = $this->model->selectTask($id);
		$this->view->currentProjectID = $id;
				
		if (empty($this->view->selectTask)) {
			$this->view->statusmsg = '<h3>There are no Tasks assigned to this project. Create one now... </h3>';
		}else {
		$this->view->statusmsg = '';
		}

	
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/task');	
        $this->view->render('layout/footer');		
	}	
	function activities() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/activities');	
        $this->view->render('layout/footer');		
	}	
	
	public function createProject() 
	{
		$data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description'],
			'status' => $_POST['status'],
			'date_to' => $_POST['date_to']
		);
		$this->model->createProject($data);
		header('location: ' . URL . 'project');
	}
	function sprint($id) {
		$this->view->selectSprint = $this->model->selectSprint($id);
		$this->view->currentProjectID = $id;
				
		if (empty($this->view->selectSprint)) {
			$this->view->statusmsg = '<h3>There are no Sprints assigned to this project. Create one now... </h3>';
		}else {
		$this->view->statusmsg = '';
		}
				
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/sprint');	
        $this->view->render('layout/footer');		
		
		
	}
	
	public function createSprint() 
	{
		$data = array(
			'idProject' => $_POST['idProject'],
			'date_from' => $_POST['date_from'],
			'date_to' => $_POST['date_to']
		);
		$this->model->createSprint($data);
		header('location: ' . URL . 'project/sprint/'. $_POST['idProject']);
	}


}