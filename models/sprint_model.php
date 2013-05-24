<?php 


/*
 * THIS IS sprint_model.php
 * 
 * Developer stories:
 * 
 * must have functions:
 * 		loadTasks($data = array()) where $data is sprintID 					======= PENDING
 * 		create($data = array()) where $data is idGroup, date_from, date_to	======= DONE
 *		loadSprint($data = array()) where $data is idSprint 				======= PENDING
 * 
 * CREATE TABLE IF NOT EXISTS sprint (
	idSprint	INT NOT NULL AUTO_INCREMENT,
	idGroup		INT NOT NULL,
	date_from	DATE NOT NULL,
	date_to		DATE NOT NULL,
	PRIMARY KEY(idsprint)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
 */
 
 class Sprint_Model extends Model  {
 	public $ID;
 	public $IDGroup;
 	public $dateFrom;
 	public $dateTo;
 	public $isLoaded;
 	
 	public function __construct()
 	{
 		//start DB connection
 		$this->isLoaded = FALSE;
 		$this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS); 		
 	}

	public function selectSprint($idProject) 	{

		return $this->db->select('SELECT * FROM sprint WHERE idProject = :idProject GROUP BY date_to ASC', 
			array('idProject' => $idProject));
	}
	
	public function create($data)
	{
		$this->db->insert('sprint', array(
			'idProject' => $data['idProject'],
			'date_from' => $data['date_from'],
			'date_to' => $data['date_to']
		));
	}
 
 }
