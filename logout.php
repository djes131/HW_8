<?php
function logout()
{
	setcookie('autorization','',time()-86400);
}
logout();
header('Location: /index.php');
exit;