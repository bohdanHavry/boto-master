<?php
session_start();
if ($_SESSION['auth_user']!="admin")
{   echo 'Доступ заборонений';
	unset($_SESSION['auth_user']);
	header("Location: ../../login.php");
 }    
 else{
		require_once "../../Include/Include.php";
		$Users = mysqli_query($linc, "SELECT
        Users.ID_user,
        Users.Login,
        Users.Password,
        Users.Confirm_password,
        Users.Nickname, 
        Users.Name,
        Users.Surname, 
        Users.Phone,
        Users.User_icon,
        Users.Personal_info,
        Users.Register_date,
        Roles.role_name
         FROM `Users` JOIN Roles ON Users.role_id = Roles.role_id");
		$Users = mysqli_fetch_all($Users);
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
	<title>Список користувачів</title>
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
		<h1 class=" text-center white-text">Таблиця користувачів</h1>
		<div class="container">
		<table class="table table-bordered table-stripped white-text">
			<thead>
				<tr>
					<th>
						Ідентифікатор користувача
					</th>
					<th>
						Логін
					</th>
					<th>
						Пароль
					</th>
					<th>
                        Підтверджений пароль
					</th>
                    <th>
						Нікнейм
					</th>
                    <th>
						Ім'я
					</th>
                    <th>
						Прізвище
					</th>
                    <th>
						Номер телефону
					</th>
                    <th>
						Фото профілю
					</th>
                    <th>
						Опис користувача
					</th>
                    <th>
						Дата реєстрації
					</th>
                    <th>
						Роль користувача
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
				foreach($Users as $item)
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
					<?= $item[3] ?>
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
					<?= $item[8] ?>
                    </td>
					<td>
					<?= $item[9] ?>
                    </td>
					<td>
					<?= $item[10] ?>
                    </td>
					<td>
					<?= $item[11] ?>
                    </td>
					<td>
						<a class="white-text" href="updateUser.php?User_Id=<?=$item[0]?>">Оновити</a>
				</td
				><td>
						<a class="white-text" href="deleteUser.php?User_Id=<?=md5($item[0])?>" onclick="return confirmSpelll();">Видалити</a>
				</td>
				<?php
				}
				?>
			</tbody>
			 </table>
			 <hr></hr>
</div>
	</body>
</html>	