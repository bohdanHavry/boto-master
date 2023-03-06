<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<title>Панель Адміністрування</title>
	<style>
		.white-text{
			color: #FFFFFF;
		}

		.vertical-nav {
			width: 200px;
			background-color: #698779;
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			overflow-x: hidden;
			padding-top: 60px;
			z-index: -1;
		}

		.vertical-nav .nav-link {
			color: #fff;
		}

		.vertical-nav .nav-link:hover {
			color: #fff;
			background-color: #6c757d;
		}

	</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success pl-6">
	  <a class="navbar-brand white-text" href="../main.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp daVinci</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="vertical-nav">
	    <ul class="navbar-nav mr-auto flex-column">
	      <li class="nav-item text-center">
          <a class="nav-link" href="Categories/list_categories.php">Категорії творів</a>
	      </li>
	      <li class="nav-item text-center">
	        <a class="nav-link" href="Posts/list_posts.php">Пости на модерацію</a>
	      </li>
	      <li class="nav-item text-center">
	        <a class="nav-link" href="#">Модеровані пости</a>
	      </li>
	      <li class="nav-item text-center">
	        <a class="nav-link" href="#">Відгуки</a>
	      </li>
	      <li class="nav-item text-center">
	        <a class="nav-link" href="#">Користувачі</a>
	      </li>
	      <li class="nav-item text-center">
	        <a class="nav-link" href="#">Ролі користувачів</a>
    </li>
    </div>
    </nav>
    </body>
    </html>