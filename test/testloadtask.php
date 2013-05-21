<?php


require((__DIR__)."/../models/task_model.php");



$task= new Task_Model();
$input=array('taskID' => 3 );
$task->load($input);

print $task->ID;
print $task->name;
print $task->description;
print $task->sprintID;
print $task->state;
print $task->deadLine;

/*		
$this->ID=$data['taskID'];
$this->name=$result[0]['name'];
$this->description=$result[0]['description'];
$this->sprintID=$result[0]['sprintID'];
$this->state=$result[0]['state'];
$this->deadLine=$result[0]['deadline'];
'/