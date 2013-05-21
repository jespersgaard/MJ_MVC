<?php


require((__DIR__)."/../models/task_model.php");



$task= new Task_Model();
$input=array('taskID' => 3 );
$task->load($input);
