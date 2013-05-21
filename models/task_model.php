<?php 

require((__DIR__)."/../config.php");
require((__DIR__)."/../libs/Database.php");

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
	
	/*
	 * Expects that $data is an array and contains the following keys in any order:
	* 'name', 'description', 'sprintID', 'state', 'deadline'
	*
	*/
	

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
			'deadline' => $data['deadline']));
		
		$this->name = $data['name']; $this->description = $data['description']; $this->sprintID = $data['sprintID']; $this->state = "TODO"; $this->deadline = $data['deadline']; $this->isLoaded = TRUE;
		}
	}
	public function load($data=array())
	{//if ($this->isLoaded)
	$where= array('taskID'=>$data['taskID']);	
		
	$sql=	'SELECT * FROM task WHERE taskID = :taskID';
	
	$result=$this->db->select($sql,$where);
	
	if($result){
		
	/*$this->ID=$data['taskID'];
	$this->name=$data['name'];
	$this->description=$data['description'];
	$this->sprintID=$data['sprintID'];
	$this->state=$data['state'];
	$this->deadLine=$data['deadline'];
	$this->isLoaded=true;
	*/
	print_r($result);
	
	}			
	}
	
	
	/*
	 * Expects that $data is an array and contains the following keys:
	 * 'name', 'taskID'
	 */
	
	public function updateName($data = array()) {
		
		if(!$this->isLoaded){
			$this->load($data['taskID']);
		}
		if($this->isLoaded)
		{		
			$postData = array('name' => $data['name']);
			$this->db->update('task', $postData, "`taskID` = '{$data['taskID']}'");
			$this->name = $data['name'];
		}
	}
	/*
	 * Expects that $data is an array and contains the following keys in any order:
	* 'description', 'taskID'
	*/
	public function updateDescription($data = array()) {
	
		if(!$this->isLoaded){
			$this->load($data['taskID']);
		}
		if($this->isLoaded)
		{
			$postData = array('description' => $data['description']);
			$this->db->update('task', $postData, "`taskID` = '{$data['taskID']}'");
			$this->description = $data['description'];
		}
	}
	
	public function assignToNextSprint($data = array()) {
	
		if(!$this->isLoaded){
			$this->load($data['taskID']);
		}
		if($this->isLoaded)
		{
			$this->sprintID += 1;
			$postData = array('sprintID' => $this->sprintID);
			$this->db->update('task', $postData, "`taskID` = '{$data['taskID']}'");
		}
	}	
}

/*============== TESTING AREA!!! ============*/
/*$initial = array(
			'name' => 'Dette er en ny task task',
			'description' => 'Dette er min description',
			'sprintID' => 2,
			'state' => 'TODO',
			'deadline' => '2010-02-06');

$modeltest = new Task_Model();
$modeltest->create($initial);

$new = array('name' => 'new name in englais',
	     'taskID' => 2);

$modeltest->updateName($new);
*/

?>
