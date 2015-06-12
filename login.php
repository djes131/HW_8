<?php
session_start();
include 'accessDB.php';
//Функция проверки логина и пароля пользователя
function checkLoginPassword($login,$password) {
	ServerDB();
	$result = array();
	$query = "SELECT login, password FROM userss" 
		or die("Error in the consult.." 
			. mysqli_error($link)); 
		$result = mysql_query($query);
//получили строку результата в виде ассоциативного массива
		while ($row=mysql_fetch_assoc($result))
		{
//если в полученном массиве $row есть введенный пользователем логин и пароль
//авторизация пройдена
		if($row['login']==$login && $row['password']==$password)
			{
				return true;
			} 
		}
	return false;
}

//Вход на сайт
function login($login)
{
	setcookie('autorization', $login, time()+86400);
}
/*
---------------------------------------------------------------------------------------
*/
//Функция проверки работы checkLoginPassword($login,$password)
/*
assert(true==checkLoginPassword('dasha','9876'));
assert(false==checkLoginPassword('dasha123','9876'));
assert(false==checkLoginPassword('dasha','987677'));
/*
assert(true==checkLoginPassword('kat','123456'));
assert(false==checkLoginPassword('kat123','123456'));
assert(false==checkLoginPassword('kat','1234569'));
*/

checkLoginPassword($login,$password);



$login=$_POST['login'];
$password=$_POST['password'];

//Проверка на пустоту логина и пароля
if(empty($login) || empty($password))
{
	$_SESSION['error']='Пустой логин или пароль!';
	header('Location: /index.php');
	exit;
}
//Если не прошли проверку логина и пароля
if(!checkLoginPassword($login,$password))
{
	$_SESSION['error']='Неверный логин или пароль!';
	header('Location: /index.php');
	exit;
}

login($login);
header('Location: /index1.php');
exit;









