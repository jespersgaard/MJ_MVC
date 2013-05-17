<?php

class Project_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function userSingleList($userid)
	{
		return $this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
	
	public function project_list() {
	}	
	
	public function project_gitter() {
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