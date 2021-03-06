<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="images/farming1.ico">
	
	<!-- Подключение bootstrap из папки -->
	<!--
		<link href="bootstrap-5.1.3-dist/css/bootstrap.css">
		<link href="bootstrap-5.1.3-dist/js/bootstrap.js">-->
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> <!-- Font Awesome -->
	<link rel="stylesheet" href="css/normalize.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap Grid -->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="css/animate.min.css"><!-- Animate -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/magnific-popup.css"> <!-- Resource style -->

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<title>Список удобрений</title>
</head>

<body>
	<header id="main-nav">
		<div class="container">

			<a id="navigation" href="#"><i class="fa fa-bars"></i></a>

			<div id="slide_out_menu">
				<a href="#" class="menu-close"><i class="fa fa-times"></i></a>
				<div class="logo"><a href="#header"><img style="width: 50px;" src="images/seedling.png" alt="сад"></a></div>
				<ul>
					<li><a href="index1.html">Главная</a></li>
					<li><a href="index_vrediteli.html">Вредители</a></li>
					<li><a href="index_udobrenia.html">Удобрения</a></li>
						<li><a href="index_udobren_ovoshi.html" style="margin-left: 5%;">Овощи</a></li>
						<li><a href="index_udobren_custarnici.html" style="margin-left: 5%;">Кустарники</a></li>
						<li><a href="index_udobren_plod_derev.html" style="margin-left: 5%;">Плодовые деревья</a></li>
					<li style="margin-top: 30px;"><a href="index_help.html">Помощь</a></li>
					<li><a href="index_contact.html">Контакты</a></li>
				</ul>

				<div class="slide_out_menu_footer">
					<ul class="socials">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				<ul class="left">
						<li><a href="index_vrediteli.html">Вредители</a></li>
						<li><a href="index_udobrenia.html">Удобрения</a></li>
					</ul>
				</div>
				<div class="col-md-4 text-center">
					<a href="#header" class="logo"><img style="width: 75px; margin-top: -40px;" src="images/seedling.png"
							alt="сад"></a>
				</div>
				<div class="col-md-4">
					<ul class="right">
						<li><a href="index_help.html" class="help">Помощь</a></li>
						<li><a href="index_contact.html">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header><!-- //Main Nav -->

	<section id="header" style="background-image: url('images/bez-cheloveka.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h1 class="wow fadeInUp">Не знаешь пропрции?</h1>
					<p class="wow fadeInUp" data-wow-delay=".2s">Здесь ты найдешь нужные,<br> 
						и твой огурчик вырастет быстрее!</p>
				</div>
			</div>
		</div>
	</section><!-- //Header -->
	
	<p class="info"> * тут должна быть табличка</p>
	<?php include_once('index13_12_2.php'); ?>

	<section id="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="subtitle"></p>
					<h2>Подпишитесь на рассылку</h2>
					<form action="EnterMail.php" method="post">
						<div class="form-group">
							<input type="email" placeholder="Ваш Email">
							<a href="#" class="btn btn-green">Подписаться</a>
						</div>
					</form>
					<p class="promise">Обещаем не присылать спам.</p>
				</div>
			</div>
		</div>
		</div>
	</section><!-- //Subscribe -->

	<footer id="footer">
		<div class="container footer-container">
			<div class="row">
				<div class="col-md-3">
					<a href="#header"><img class="logo" src="images/seedling.png" alt="сад"></a>
					<p>Самое время для того, чтобы вырастить что-то!</p>
					<a href="#" class="app_download"><img src="images/download.svg" alt="скачать"></a>
					<ul class="socials">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-6 footer-links">
					<ul>
						<li>
							<p class="title">Узнать больше</p>
						</li>
						<li><a href="index_udobrenia.html">Удобрения</a></li>
						<li><a href="index_vrediteli.html">Сорняки</a></li>
						<li><a href="index1.html">Главная</a></li>
						<li><a href="index_contact.html">Связаться с нами</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 footer-links">
					<ul>
						<li>
							<p class="title">Удобрения</p>
						</li>
						<li><a href="index_udobren_ovoshi.html">Овощи</a></li>
						<li><a href="index_udobren_custarnici.html">Кустарники</a></li>
						<li><a href="index_udobren_plod_derev.html">Деревья</a></li>
						<li><a href="index_list_udobreniy.php">Пропорции</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 footer-links">
					<ul>
						<li>
							<p class="title">Тех. поддержка</p>
						</li>
						<li><a href="index_help.html">F.A.Q.</a></li>
						<li><a href="index_contact.html">Контакты</a></li>
						<li><a href="index_help.html">Помощь</a></li>
						<li><a href="index_contact.html">Позвонить</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container copyright-container">
			<div class="row">
				<div class="col-md-6 text-left"></div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
	<script src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
	<script src="js/wow.min.js"></script> <!-- wow -->
	<script src="js/jquery.magnific-popup.min.js"></script> <!-- wow -->
	<script src="js/main.js"></script> <!-- Main Script -->

	<!-- Подключаем jQuery, Popper и Bootstrap JS, чтобы работали интерактивные компоненты  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>