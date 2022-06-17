<?php
$mysqli = new mysqli('localhost','root','','dmm');
if($mysqli->connect_error){
	echo $mysqli->connect_error;
}
?>