<?php 
require((__DIR__)."/../config.php");
require((__DIR__)."/../libs/Database.php");

$db= new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
$var= 'select * FROM task WHERE taskID=1';
$dbarray=array('name'=>'ole'
		);

$result=$db->select($var,$dbarray);
echo "$result";
?>