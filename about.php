<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>DaVinci</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Photo Studio">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
					<div class="header__social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="./index.php" class="site-logo" style="display: flex; flex-direction: row; justify-content: center;">	
						<!---<img src="/img/leonardo-da-vinci.png" style="height: 45px; width: 45px;" alt="">--->		
						<h1 class="logo-title" style="font-size: 40px;">DaVinci</h1>
					</a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
						<a href="#" class="search-switch"><i class="fa fa-search"></i></a>
						<a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
						<a href="#"><i class="fa fa-heart"></i></a>
						<a href="login.php"><i class="fa fa-user"></i></a>						
					</div>
				</div>
			</div>
			<nav class="main__menu">
				<ul class="nav__menu">
					<li><a href="./index.php" class="menu--active">Головна</a></li>
					<li><a href="./about.php">Про нас</a></li>
					<li><a href="./gallery.php">Галерея</a></li>
					<li><a href="./blog.php">Пости</a>
						<ul class="sub__menu">
							<li><a href="./blog-single.php">Одиночний пост</a></li>
						</ul>
					</li>
					<li><a href="./contact.php">Контакти</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- About Page -->
	<section class="about__page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="about__text">
						<h3 class="about__title">Про нас</h3>
						<div class="about__meta">
							<div class="about__meta__info">
								<h5>Програмний продукт</h5>
								<p>DaVinci</p>
							</div>
						</div>
						<p>Програмний продукт був розроблений під час роботи над практичними роботами з предмету "Проєктний практикум" групою розробників-студентів групи П-421</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="experience__text">
						<h3 class="about__title">Розроблено студентами:</h3>
						<div class="experience__item">
							<h4>Керівник проєкту</h4>
							<p>Бойков А.Д.</p>
						</div>
						<div class="experience__item">
							<h4>Ведучий програміст</h4>
							<p>Гаврилюк Б.В.</p>
						</div>
						<div class="experience__item">
							<h4>Розробник Бази даних</h4>
							<p>Козир А.С.</p>
						</div>
						<div class="experience__item">
							<h4>Розробник веб-дизайну</h4>
							<p>Гамоцький А.Д.</p>
						</div>
						<div class="experience__item">
							<h4>Тестувальник</h4>
							<p>Носко В.В.</p>
						</div>
						<div class="experience__item">
							<h4>Спеціаліст по розгортанню та технічному забезпеченню</h4>
							<p>Вислоцький В.В.</p>
						</div>
					</div>
				</div>
		    </div>
		</div>
	</section>
	<!-- About Page end -->

	<!-- Footer Section -->
	<footer class="footer__section">
		<div class="container">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved by DaVinci</p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
	</footer>
	<!-- Footer Section end -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Введіть для пошуку.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
