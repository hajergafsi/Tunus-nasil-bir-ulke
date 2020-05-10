<?php 

$servername= "localhost";
$dBUsename ="root";
$dBPassword="";
$dBName= "loginsystem";

$conn = mysqli_connect($servername,$dBUsename,$dBPassword,$dBName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
	
}