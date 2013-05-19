<?php 

require((__DIR__)."/../config.php");
require((__DIR__)."/../libs/Database.php");
//require 'Database.php';
//require 'config.php';
class Task_Model
{
	public $ID;
	public $name;
	public $description;
	public $isLoaded;
	public $state;
	public $sprintID;
	public $deadline;
	
	public function __construct()
	{
		$this->isLoaded = FALSE;
		$this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
	}

	public function create($data = array())
	{
		//Check if the object is already loaded: 
		if(!$this->isLoaded)
		{

		//prepare deadline to mysql date: possibly deprecated
		//$mysqldeadline = date('Y-m-d', $data['deadline']);
		//Insert into db: 
		$this->db->insert('task', array(
			'name' => $data['name'],
			'description' => $data['description'],
			'sprintID' => $data['sprintID'],
			'state' => $data['state'],
			'deadline' => $data['deadline'));
		
		$this->name = $data['name']; $this->description = $data['description']; $this->sprintID = $data['sprintID']; $this->state = "TODO"; $this->deadline = $data['deadline']; $this->isLoaded = TRUE;
		}
	}
	
	public function updateName($data = array()) {
		
		if(!$this->isLoaded){
			$this->load($id);
		}
		if($this->isLoaded)
		{		
			$postData = array('name' => $data['name']);
			$this->db->update('task', $postData, "`taskID` = '{$data['taskID']}'");
			$this->name = $data['name'];
		}
	}
	
	public function load($data = array())
	{
		//$phpdate = strtotime( $mysqldate );
	}
		
	
}
$data = array(
			'name' => 'Dette er min task',
			'description' => 'Dette er min description',
			'sprintID' => 1,
			'state' => 'TODO',
			'deadline' => '2010-02-06');

$modeltest = new Task_Model();
$modeltest->create($data);

?>
