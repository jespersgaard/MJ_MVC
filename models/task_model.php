<?php 

class Task_Model extends Model
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
		parent::__construct();
	}

	public function create($data)
	{
		//Check if the object is already loaded: 
		if(!$this->isloaded)
		{
		//Insert into db: 
		$this->db->insert('task', array(
			'name' => $data['name'],
			'description' => $data['description'],
			'sprintID' => $data['sprintID'],
			'state' => $data['sprintID'],
			'deadline' => date('deadline') // use GMT aka UTC 0:00
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

?>
