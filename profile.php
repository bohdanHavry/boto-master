<?php
	session_start();
	include "include/include.php"; //Підключення до бази даних
    $ID_User = $_GET['ID_User'];
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "Пост був успішно відправлений на модерацію, очікуйте деталей про його статус!";
      }
    //echo "'.$ID_User.'";

   /* // перевіряємо, чи залогінений користувач
    if (!isset($_SESSION['ID_User'])) {
        // перенаправляємо на головну сторінку
        header('Location: index.php');
        exit();
    }*/

    // обробляємо натискання на кнопку "Вийти"
    if (isset($_POST['logout'])) {
        // видаляємо всі дані сеансу
        session_unset();
        session_destroy();
        // перенаправляємо на головну сторінку
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/profile.css"/>
   
<!------ Include the above in your HEAD tag ---------->
    <title>DaVinci</title>
</head>
<body>

<div class="title-main">
	<a href="./index.php" style="display: flex; flex-direction: row; justify-content: center;">	
		<!---<img src="/img/leonardo-da-vinci.png" style="height: 45px; width: 45px;" alt="">--->		
		<h1 class="logo-title" style="font-size: 40px; color: black;">DaVinci</h1>
	</a>
</div>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://i1.sndcdn.com/artworks-000657857794-h0i43g-t500x500.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Змінити фото
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM Users WHERE ID_User='$ID_User'";
                    $result = mysqli_query($linc, $sql);

                    // перевірка наявності даних у таблиці
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            // виведення даних на сторінку
                            echo ' <div class="col-md-6">
                                    <div class="profile-head">
                                    <h5>
                                        '. $row["Nickname"] .'
                                    </h5>
                                    <h6>
                                        '. $row["Personal_info"] .'
                                    </h6>
                        </div>
                    </div>';
                    }
                    } else {                   
                    // якщо таблиця порожня, виводимо повідомлення
                    echo "Увійдіть в акаунт";
                    }

                    // закриття з'єднання з базою даних
                    ?>

                    <div class="col-md-2" style="text-align: center;">
                    <?php 
                            if($ID_User > 0 && $_SESSION['auth_user']=="admin")
                            {
                              echo'<a class="profile-edit-btn" href="changeinfo.php?ID_User='.$ID_User.'">Змінити інформацію</a>';
                              echo'</br>';
                              echo'</br>';
                              echo'<a class="profile-edit-btn" href="createPost.php?ID_User='.$ID_User.'">Створити пост</a>';
                              echo'</br>';
                              echo'</br>';
                              echo'<a class="profile-edit-btn" href="admin/admin_panel.php">Адміністрування</a>';
                            }
                            if($ID_User > 0 && $_SESSION['auth_user']!="admin")
                            {
                              echo'<a class="profile-edit-btn" href="changeinfo.php?ID_User='.$ID_User.'">Змінити інформацію</a>';
                              echo'</br>';
                              echo'</br>';
                              echo'<a class="profile-edit-btn" href="createPost.php?ID_User='.$ID_User.'">Створити пост</a>';
                            }
                        ?>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Проєкти</p>
                            <a href="">Назва проекту №1</a><br/>
                            <a href="">Назва проекту №2</a><br/>
                            <a href="">Назва проекту №3</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       <!----- <div class="row">
                                            <div class="col-md-6">
                                                <label>Назва користувача</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Нікнейм</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ім'я</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Ім'я</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Прізвище</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Прізвище</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Поштова скринька</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>example@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Телефон</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>0000-0000-0000</p>
                                            </div>
                                        </div>      ---->          
                                        <?php
                                        // запит для вибору даних з таблиці
                                        $sql = "SELECT * FROM Users WHERE ID_User='$ID_User'";
                                        $result = mysqli_query($linc, $sql);
                                        
                                        // перевірка наявності даних у таблиці
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                // виведення даних на сторінку
                                                echo '<div class="row">
                                                        <div class="col-md-6">
                                                            <label>Ім\'я</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>' . $row["Name"] . '</p>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Прізвище</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>' . $row["Surname"] . '</p>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Поштова скринька змінити бо тут нікнейм</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>' . $row["Nickname"] . '</p>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Телефон</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>' . $row["Phone"] . '</p>
                                                        </div>
                                                      </div>';
                                            }
                                        } else {                   
                                        // якщо таблиця порожня, виводимо повідомлення
                                        echo "Увійдіть в акаунт";
                                        }

                                        // закриття з'єднання з базою даних
                                        mysqli_close($linc);
                                        ?>   
                                    <form method="post">
                                    <a href="login.php" class="btn btn-succes" name="logout">Вийти з акаунту</a>
                                    </form>                       
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </body>
</html>