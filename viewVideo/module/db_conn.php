<?php
$db = new mysqli("localhost", "root", "", "mysql");

if($db->connect_error){
	die("db error");
}

$db-> set_charset("UTF8");

function myq($sql){
	global $db;
	return $db->query($sql);
}
?>