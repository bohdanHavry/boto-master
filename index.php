<?php
session_start();
include "include/include.php";
if (isset($_GET['ID_User'])) {
    $ID_User = $_GET['ID_User'];
    // тут можна виконати код, який використовує змінну $ID_User
} else {
    // тут можна виконати інші дії, якщо параметр ID_User не був переданий
}

 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>DaVinci</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>
	<link rel="stylesheet" href="css/slick.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/styyle.css"/>


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
						<?php 
                            if(isset($_GET['ID_User'])>0)
                            {
								echo '<a href="profile.php?ID_User=' . $ID_User . '"><i class="fa fa-user"></i></a>';

                            } else echo '<a href="login.php"><i class="fa fa-user"></i></a>';
                        ?>							
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

	<section class="theme__name">
		<div class="theme-name">	
			<H2>Найпопулярніше на сайті</H2>
		</div>
	</section>				

	<!-- Hero Section -->
	<section class="hero__section">
		<div class="hero-slider">
			<div class="slide-item">
				<a class="fresco" data-fresco-group="projects">				
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '1'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>
			</div>
			<div class="slide-item">
				<a class="fresco" data-fresco-group="projects">				
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '2'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>
			</div>
			<div class="slide-item">
			<a class="fresco" data-fresco-group="projects">				
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '3'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/4.jpg" data-fresco-group="projects">
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '4'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/5.jpg" data-fresco-group="projects">
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '5'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/6.jpg" data-fresco-group="projects">
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '6'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/7.jpg" data-fresco-group="projects">
				<?php
				$sql = "SELECT post_image FROM Posts WHERE post_id = '7'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$imagePath = $row['post_image'];

						echo '<img src="' . $imagePath . '" >';
					} else {
						echo 'Зображення не знайдено';
					}
				?>
				</a>	
			</div>
		</div>
		<div class="hero-text-slider">
			<div class="text-item">

			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '1'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '1'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '1'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
				
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '2'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '2'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '2'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '3'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '3'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '3'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '4'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '4'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '4'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '5'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '5'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '5'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '6'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '6'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '6'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
			<div class="text-item">
			<?php
				$sql = "SELECT post_title FROM Posts WHERE post_id = '7'";
				$sql2 = "SELECT category_name FROM Categories INNER JOIN Posts ON Posts.category_id = Categories.category_id WHERE post_id = '7'";
				$sql3 = "SELECT Nickname FROM Users INNER JOIN Posts ON Posts.user_id = Users.ID_User WHERE post_id = '7'";
				$result = mysqli_query($linc, $sql);

				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$title = $row['post_title'];

						echo '<h2>' . $title . '</h2>';
					} else {
						echo 'Заголовок не знайдено';
					}

					$result2 = mysqli_query($linc, $sql2);

				if ($result2 && mysqli_num_rows($result2) > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$category = $row2['category_name'];

						echo '<p>' . $category . '</p>';
					} else {
						echo 'Категорію не знайдено';
					}
				
					$result3 = mysqli_query($linc, $sql3);

				if ($result3 && mysqli_num_rows($result3) > 0) {
					$row3 = mysqli_fetch_assoc($result3);
					$Nickname = $row3['Nickname'];
	
						echo '<p>' . $Nickname . '</p>';
					} else {
						echo 'Користувача не знайдено';
					}
				
				?>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

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
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>