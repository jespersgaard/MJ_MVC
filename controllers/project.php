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

	function intro() {
		$this->view->project = $this->model->userSingleList($id);	
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
	function sprint() {
        $this->view->render('layout/header');
        $this->view->render('layout/menu_top');
        $this->view->render('layout/menu_sidebar');	
		$this->view->render('project/sprint');	
        $this->view->render('layout/footer');		
	}	
	
}