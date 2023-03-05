
<?php
	session_start();
	include "include/include.php"; //Підключення до бази даних


    if (isset($_POST['submit_input']))
	{
		$login=$_POST["login"];
		$password=$_POST["password"];


       $id_query = mysqli_query($linc, "SELECT ID_User FROM Users WHERE Login='$login' AND Password='$password'");
       if (mysqli_num_rows($id_query) > 0) {
        $id_row = mysqli_fetch_assoc($id_query);
        $user_id = $id_row['ID_User'];
         }
        

		$result = mysqli_query($linc, "SELECT * FROM Users WHERE Login='$login' AND Password='$password'");
	     if (mysqli_num_rows($result)>0)
	     {$row=mysqli_fetch_array($result);
			if ($row["Access_level"]==1) 
			{$_SESSION['auth_user']	= 'user';
                $_SESSION['ID_User'] = $user_id;
	         header("Location: authorized_index.php?ID_User=$user_id");
			}
			if ($row["Access_level"]==10) 
			{$_SESSION['auth_user']	= 'admin';
	         header("Location: authorized_index.php?ID_User=$user_id");
			}
            else{
                echo 'Такого користувача не існує';
            }
		 }
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/login.css"/>
    <title>Логін та Реєстрація</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Вхід</span>
                <form method="POST" action="">
                    <div class="input-field">
                        <input name="login" type="text" placeholder="Введіть логін" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" class="password" placeholder="Введіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Запам'ятати мене</label>
                        </div>
                        
                        <a href="#" class="text">Забули пароль?</a>
                            </div>

                    <div class="input-field button">
                        <input type="submit" name="submit_input" value="Увійти">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Ще не зареєстровані?
                        <a href="#" class="text signup-link">Зареєструватися зараз!</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Реєстрація</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Введіть ім'я" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введіть поштову скриньку" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Введіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Підтвердіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Зареєструватися">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Вже зареєстровані?
                        <a href="#" class="text login-link">Увійти зараз!</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>

