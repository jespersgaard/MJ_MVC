<?php 


/*
 * THIS IS sprint_model.php
 * 
 * Developer stories:
 * 
 * must have functions:
 * 		loadTasks($data = array()) where $data is sprintID 					======= PENDING
 * 		create($data = array()) where $data is idGroup, date_from, date_to	======= DONE
 *		loadSprint($data = array()) where $data is idSprint 				======= DONE
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
 		if(!$this->isLoaded)
 		{
			print_r($data);
 			$this->db->insert('sprint', array(
 					'idGroup' => $data['idGroup'],
 					'date_from' => $data['dateFrom'],
 					'date_to' => $data['dateTo']));
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
				$this->ID = $data['idSprint'];
				$this->IDGroup = $result[0]['idGroup'];
				$this->dateFrom = $result[0]['date_from'];
				$this->dateTo = $result[0]['date_to'];	
				return $result;
			}
		}
 	}
 }
/*===================== TESTING AREA ==============*/
//$data = array('idGroup' => 1, 'dateFrom' => '2010-12-12', 'dateTo' => '2011-03-10');
//$newSprint = new Sprint_Model();
//$newSprint->create($data);

//$load = array('idSprint' => 1);

//$anotherSprint = new Sprint_Model();
//$anotherSprint->load($load);

//echo $this->IDGroup; echo $this->dateFrom; echo $this->dateTo;

?>
