<?php
function ServerDB()
{
	$db_hostname='localhost';
	$db_username='root';
	$db_password='';
	$db_table='userss';
	$connect=mysql_connect("localhost","root","","users") or die("Error " . mysqli_error($connect));
	mysql_select_db('users');
}