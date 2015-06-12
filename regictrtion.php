<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<form action="/registr.php" method="post">
		<fieldset>
			<legend>Регистрация нового пользователя</legend>
			<label>Логин:</label>
			<input type="text" name="login"/><br/><br/>
			<label>Пароль:</label>
			<input type="password" name="password"/><br/><br/>
			<label>E-mail:</label>
			<input type="text" name="email"/><br/><br/>
			<input type="submit" name="submit" value="Зарегистрироваться">
		</fieldset>
	</form>
</body>
</html>