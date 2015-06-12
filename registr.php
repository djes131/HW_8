<?php
session_start();
include 'accessDB.php';

function Insert(){
	ServerDB();
	if(isset($_POST['submit']))
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$query=mysql_query("INSERT INTO userss VALUES(NULL,'$login','$password','$email',NULL,NULL)") or die(mysql_error());
		return true;
	} 
	return false;
}

//Функция проверки заполнения пользователем полей в форме 
//если какоето поле пусто отправить его назад на эту же форму регистрации
$login=isset($_POST['login']);
$password=isset($_POST['password']);
$email=isset($_POST['email']);

function checkEmptyField()
{
	if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['email']))
	{
		header('Location: /regictrtion.php');
		exit;
	}
}
checkEmptyField();
Insert();
?>

<h1 style='color:green'>Регистрация прошла успешно!!!</h1>