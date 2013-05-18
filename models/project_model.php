<?php

class Project_Model extends Model {

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
	
	public function create_task($data)
	{
		$this->db->insert('note', array(
			'title' => $data['title'],
			'userid' => $_SESSION['userid'],
			'content' => $data['content'],
			'date_added' => date('Y-m-d H:i:s') // use GMT aka UTC 0:00
		));
	}
	
}