<?php
require_once "../../Include/include.php";
$Posts = mysqli_query($linc, "SELECT * FROM `Posts`");
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
    </style>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
	  <a class="navbar-brand white-text" href="../main.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp daVinci</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
    </nav>
		<div class="container text-center">
            <h1>Пости, що чекають на модерацію</h1>
		<table class="table table-bordered table-stripped" style="width:100%">
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
						Ідентифікатор користувача
					</th>
                    <th>
						Ідентифікатор категорії
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
						<a href="../updateClient.php?CKod=<?=$item[0]?>">Оновити</a>
				</td
				><td>
						<a href="deleteClient.php?CKod=<?=$item[0]?>" onclick="return confirmSpelll();">Видалити</a>
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