<?php
//require((__DIR__)."/../config.php");
//require((__DIR__)."/../libs/database.php");
require((__DIR__)."/../models/sprint_model.php");

class group_model
{
	
public $idgroup;
public $namegroup;
public $descriptiongroup;
public $datecreatedgroup;
public $dateclosedgroup;
public $statusgroup;
public $isloaded;

public function construct()
{
	$this->isloaded=false;
}
public function Create($data= array()) {
	if (!$this->isloaded) 
	{
		$this->db->insert('group', array(
				'idgroup'=>$data['idgroup'],
				'namegroup'=>$data['namegroup'],
				'descriptiongroup'=>$data['descriptiongroup'],
				'datecreatedgroup'=>$data['datecreatedgroup'],
				'dateclosedgroup'=>$data['dateclosedgroup'],
				'statusgroup'=>$data['$statusgroup']));
				$this->isLoaded = TRUE;
				
		$this->idgroup=$data['idgroup'];
		$this->namegroup=$data['namegroup'];
		$this->descriptiongroup=$data['descriptiongroup'];
		$this->datecreatedgroup=$date['datecreatedgroup'];
		$this->dateclosedgroup=$data['dateclosedgroup'];
		$this->closedgroup=$data['closedgroup'];
	}
			
	}
}





