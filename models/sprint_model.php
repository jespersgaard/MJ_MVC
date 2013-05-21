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

 require((__DIR__)."/../config.php");
 require((__DIR__)."/../libs/Database.php");
 
 class Sprint_Model
 {
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
 	
 	public function create($data = array()) 
 	{
 		if(!$this->isLoaded = FALSE)
 		{
 			$this->db->insert('sprint', array(
 					'idGroup' => $data['idGroup'],
 					'dateFrom' => $data['dateFrom'],
 					'dateTo' => $data['dateTo']));
 			$this->isLoaded = TRUE;
 			
 			$this->IDGroup = $data['idGroup']; $this->dateTo = $data['dateTo']; $this->dateFrom = $data['dateFrom'];
 		}
 	}
 	
 	public function load($data = array())
 	{
		if(!$this->isLoaded)
		{
			$sql = 'SELECT idGroup, date_from, date_to FROM sprint WHERE idSprint = :idSprint';
			$where = array('idSprint' => $data['idSprint']);
			$result = $this->db->select($sql,$where);
			
			if($result)
			{
				print_r($result);	
			}
		}
		
 		
 	}
 	
 }




?>