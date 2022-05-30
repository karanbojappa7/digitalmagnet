<?php
$mysqli = new mysqli('localhost','root','','dtmf');
if($mysqli->connect_error){
	echo $mysqli->connect_error;
}
?>