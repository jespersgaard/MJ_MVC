<?php

class Project_Model extends Model {
	public $projectID;
	
	public function __construct() {
		parent::__construct();
	}

	public function project_list_mine()
	{
		return $this->db->select('SELECT  `project` . * ,  `user`.`userid` ,  `user`.`login` FROM  `project` ,  `user` WHERE  `project`.`idUser` =  `user`.`userid` AND `project`.`idUser` = :userid', 
				array('userid' => $_SESSION['userid']));			
	}
	
	public function project_all() {
		return $this->db->select('SELECT  `project` . * ,  `user`.`userid` ,  `user`.`login` FROM  `project` ,  `user` WHERE  `project`.`idUser` =  `user`.`userid` ');
	}	
	
	public function project_gitter() {
		return $this->db->select('SELECT  `project` . * ,  `user`.`userid` ,  `user`.`login` FROM  `project` ,  `user` WHERE  `project`.`idUser` =  `user`.`userid` ');
	}
	
	public function show_members() {
		return $this->db->select('SELECT  `projectmembers` . * FROM  `projectmembers` ,  `project`  ');
	}
	
	public function createProject($data)
	{
		$this->db->insert('project', array(
			'idUser' => $_SESSION['userid'],
			'name' => $data['name'],
			'description' => $data['description'],
			'status' => $data['status'],
			'date_from' => date('Y-m-d H:i:s'), // use GMT aka UTC 0:00
			'date_to' => $data['date_to']
		));
	}
	
	public function selectProject($idProject)
	{
		return $this->db->select('SELECT * FROM project WHERE idProject = :idProject', 
			array('idProject' => $idProject));
	}	
	
	public function selectSprint($idProject) 	{

		return $this->db->select('SELECT * FROM sprint WHERE idProject = :idProject GROUP BY date_to ASC', 
			array('idProject' => $idProject));
	}
	
	public function createSprint($data)
	{
		$this->db->insert('sprint', array(
			'idProject' => $data['idProject'],
			'date_from' => $data['date_from'],
			'date_to' => $data['date_to']
		));
	}
	
	public function selectTask($idProject) 	{

		return $this->db->select('SELECT * FROM task WHERE idProject = :idProject GROUP BY date_to ASC', 
			array('idProject' => $idProject));
	}	
}