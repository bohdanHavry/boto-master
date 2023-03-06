
<?php
	session_start();
	include "include/include.php"; //Підключення до бази даних


    if (isset($_POST['submit_input']))
	{
		$login=$_POST["login"];
        //////// Міняти бо 2 користувача з незашифрованими паролями 
		//$password=$_POST["password"];
        $password = md5($_POST["password"]);

       $id_query = mysqli_query($linc, "SELECT user_id FROM Users WHERE user_login='$login' AND user_password='$password'");
       if (mysqli_num_rows($id_query) > 0) {
        $id_row = mysqli_fetch_assoc($id_query);
=======
        $ID_User = $id_row['ID_User'];
>>>>>>> a2d0f4d609ad4c14bb7b171d9ec8b7b23f72033c
         }
        

		$result = mysqli_query($linc, "SELECT * FROM Users WHERE user_login='$login' AND user_password='$password'");
	     if (mysqli_num_rows($result)>0)
	     {$row=mysqli_fetch_array($result);
=======
			if ($row["Access_level"]==1) 
			{$_SESSION['auth_user']	= 'user';
                $_SESSION['ID_User'] = $ID_User;
	         header("Location: index.php?ID_User=$ID_User");
             //header("Location: index.php?ID_User=$ID_User");
			}
			if ($row["Access_level"]==10) 
			{$_SESSION['auth_user']	= 'admin';
                $_SESSION['ID_User'] = $ID_User;
	         header("Location: index.php?ID_User=$ID_User");
>>>>>>> a2d0f4d609ad4c14bb7b171d9ec8b7b23f72033c
			}
            else{ echo'
                <script>
					alert("Такого користувача не існує.");
				</script>';
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
	<link rel="stylesheet" href="css/loginform.css"/>
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

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Введіть логін" name="Login" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Введіть пароль" name="Password"  required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Підтвердіть пароль" name="Confirm_password"  required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Nickname" name="Nickname" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введіть ім'я" name="Name" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введіть прізвище" name="Surname" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="tel" pattern="[+]380[0-9]{9}" placeholder="Введіть телефон" title="Формат телефона +380ХХХХХХХХХ" name="Phone" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Особиста інформація" name="Personal_info" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field button">
                        <a href="#"><input type="submit" name="submit_reg" value="Зареєструватися"></a>
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

<?php
	$error="";
	if (isset($_POST['submit_reg']))
    {
		if ($_POST["Login"]=="" || $_POST["Password"]=="" || $_POST["Confirm_password"]=="")
			{echo '
				<script>
				alert("Не введено логін або пароль.");
				</script>';
				$error="1";
			}
		

		if ($_POST["Password"]!=$_POST["Confirm_password"])
		    {echo '
			<script>
			alert("Не співпадають введені значення паролю.");
			</script>';
			$error="2";
		    }
		
		$result=mysqli_query($linc, "SELECT * FROM Users");
           $row = mysqli_fetch_array($result);
			do{
			  if ($_POST["Login"]==$row['Login'])
			  {echo '
				<script>
					alert("Такий логін вже існує.");
				</script>';
				$error="3";				
			  }
			  
		      }	
			while ($row = mysqli_fetch_array($result));  	
		
		if ($error=="")
		{
        $password1 = md5($_POST["Password"]);
         $password2 = md5($_POST["Confirm_password"]);
		  $Access_level="1";;
			mysqli_query($linc, "INSERT INTO Users SET
					Login='".$_POST["Login"]."',
					Password='".$password1."',
                    Confirm_password='".$password1."',
                    Nickname='".$_POST["Nickname"]."',
                    Name='".$_POST["Name"]."',
                    Surname='".$_POST["Surname"]."',
                    Phone='".$_POST["Phone"]."',
                    Personal_info='".$_POST["Personal_info"]."',
					Access_level='".$Access_level."'
					");
                  //  header("Location: login.php");
		};
	};		

?>           	