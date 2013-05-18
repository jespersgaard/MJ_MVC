<?php 

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
		if(!$this->isloaded)
		{
		//Insert into db: 
		$this->db->insert('task', array(
			'name' => $data['name'],
			'description' => $data['description'],
			'sprintID' => $data['sprintID'],
			'state' => $data['state'],
			//'deadline' => date('deadline') // use GMT aka UTC 0:00
		));
		$this->name = $data['name']; $this->description = $data['description']; $this->sprintID = $data['sprintID']; $this->state = "TODO"; $this->deadline = $data['deadline']; $this->isLoaded = TRUE;
		}
	}
	
	public function updateName($data) {
		
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
		
	
}
$data = array(
			'name' => 'Dette er min task',
			'description' => 'Dette er min description',
			'sprintID' => 1,
			'state' => 'TODO');

$modeltest = new Task_Model();
$modeltest->create($data);

?>
