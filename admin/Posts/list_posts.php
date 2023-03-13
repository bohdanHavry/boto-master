<?php
session_start();
if ($_SESSION['auth_user']!="admin")
{   echo 'Доступ заборонений';
	unset($_SESSION['auth_user']);
	header("Location: ../../login.php");
 }    
 else{
require_once "../../Include/include.php";
$Posts = mysqli_query($linc, "SELECT Posts.post_id,
 Posts.post_title, 
 Posts.post_description, 
 Posts.post_image, 
 Posts.artist_name, 
 Posts.created_at,
 Users.Nickname,
 Categories.category_name
FROM `Posts` JOIN Users ON Posts.user_id = Users.ID_User
 JOIN Categories ON Posts.category_id = Categories.category_id");
$Posts = mysqli_fetch_all($Posts);
echo '
<script>
function confirmSpelll() {
    if (confirm("Увага! При видаленні даних з довідника, в основній таблиці запис теж буде видалено!")) {
        return true;
    } else {
        return false;
    }
}
 
</script>
';
 }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<title>Категорії творів</title>
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
		.container{
			float: center;
			z-index: -1;
		}
		.navbar{
			width: 100%;
			left: 0;
		}
    </style>
	</head>
	<body class="bg-dark white-text">
	<nav class="navbar navbar-expand-lg navbar-light bg-danger pl-6">
	  <a class="navbar-brand white-text bg-danger" href="../admin_panel.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp daVinci</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
	  <a class="nav-link white-text" href="../Categories/list_categories.php">&nbsp &nbspКатегорії творів</a>
      </li>
      <li class="nav-item">
	  <a class="nav-link white-text" href="../Posts/list_posts.php">&nbsp &nbspПости на модерацію</a>
      </li>
      <li class="nav-item">
	  <a class="nav-link white-text" href="../Confirmed_posts/list_confirmed_posts.php">&nbsp &nbspМодеровані пости</a>
      </li>
      <li class="nav-item">
	  <a class="nav-link white-text" href="#">&nbsp &nbspВідгуки</a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link white-text" href="../Users/list_users.php">&nbsp &nbspКористувачі</a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link white-text" href="#">&nbsp &nbspРолі користувачів</a>
      </li>
    </ul>
  </div> 
    </nav>
		<div class="container text-center">
            <h1>Пости, що чекають на модерацію</h1>
		<table class="table table-bordered table-stripped white-text" style="width:100%">
			<thead>
				<tr>
					<th>
						Код 
					</th>
					<th>
						Назва публікації
					</th>
					<th>
						Опис публікації
					</th>
                    <th>
						Зображення
					</th>
                    <th>
						Ім'я автора
					</th>
                    <th>
						Час створення
					</th>
                    <th>
						Нікнейм користувача
					</th>
                    <th>
						Назва категорії
					</th>
					<th>
						&#9998
					</th>
					<th>
						&#10006
					</th>
					<tr>

			</thead>
			<tbody>
				<?php
				foreach($Posts as $item)
				{
				?>
				<tr>
					<td>
					<?= $item[0] ?>
                    </td>
					<td>
					<?= $item[1] ?>
                    </td>
					<td>
					<?= $item[2] ?>
                    </td>
                    <td>
					<img height="140px" width="200px" src="<?= $item[3] ?>">
                    </td>
					<td>
					<?= $item[4] ?>
                    </td>
					<td>
					<?= $item[5] ?>
                    </td>
                    <td>
					<?= $item[6] ?>
                    </td>
					<td>
					<?= $item[7] ?>
                    </td>

					<td>
						<a class="white-text" href="../updateClient.php?CKod=<?=$item[0]?>">Опублікувати</a>
				</td
				><td>
						<a class="white-text" href="deleteClient.php?CKod=<?=$item[0]?>" onclick="return confirmSpelll();">Заблокувати</a>
				</td>
				<?php
				}
				?>
			</tbody>
			 </table>
			</div>
</div>
	</body>
</html>	