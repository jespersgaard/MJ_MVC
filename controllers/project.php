<?php

class Project extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
        $this->view->render('layout/header');
		$this->view->render('project/index');	
        $this->view->render('layout/footer');		
	}
	
 	function project_list() {
        $this->view->render('layout/header');
		$this->view->render('project/project_list');	
        $this->view->render('layout/footer');			
	}   
	
	function project_gitter() {
        $this->view->render('layout/header');
		$this->view->render('project/project_gitter');	
        $this->view->render('layout/footer');		
	}

	function intro() {
        $this->view->render('layout/header');
		$this->view->render('project/intro');	
        $this->view->render('layout/footer');		
	}

	function members() {
        $this->view->render('layout/header');
		$this->view->render('project/members');	
        $this->view->render('layout/footer');		
	}
	
	function task() {
        $this->view->render('layout/header');
		$this->view->render('project/task');	
        $this->view->render('layout/footer');		
	}	
	
}