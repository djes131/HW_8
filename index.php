<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мой блог</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link href='http://fonts.googleapis.com/css?family=Lancelot|Abril+Fatface' rel='stylesheet' type='text/css' />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="img/logo.jpg"></div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">

				<form class="form"  action="/login.php" method="post">
						<?php
							  if(!empty($_SESSION['error']))
							  {
							  	echo $_SESSION['error'];
							  	unset($_SESSION['error']);
			 				 }

						?>
					<div class="form-group">
						<label for="login" class="sr-only">Логин:</label>
						<input type="text" class="form-control" id="inputLogin" name="login" placeholder="Введите логин"/>
					</div>
					<div class="form-group">
						<label class="sr-only" for="inputPassword">Пароль:</label>
						<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Введите пароль"/>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox">Запомнить</label>
					</div>
						
					<button type="submit" class="btn btn-success" name="enter">Войти</button><br/>
				</form>
				<div class="regictrtion">
					<a href="/regictrtion.php">Регистрация</a>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<div id="letter-container" class="letter-container">
						<h2>
							<a href="#">Music</a>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h4>Категории</h4>
					<?php
				include("menu.php");
				$categorriesArray = getAllCategories();
				createMenu($categorriesArray);
			?>
					<p>Ширина блока в 3 колонки</p>
				</div>
				<div class="col-md-9">
					<p>Ширина блока в 9 колонки</p>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p>Ширина блока в 12 колонки</p>
				</div>
			</div>

		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.lettering.js"></script>
		<script type="text/javascript">
				$(function() {
					$("#letter-container h2 a").lettering();
				});
			</script>
	</div>
</body>
</html>