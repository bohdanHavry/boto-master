
<?php

	session_start();
	include "include/include.php"; //Підключення до бази даних
    $ID_User = $_GET['ID_User'];
    echo "'$ID_User'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/loginform.css"/>
    <title>Змінення інформації</title>
</head>
<body>
    <div class="container active">
        <div class="forms">
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Змінення інформації</span>
                <form action="" method="POST">
                  <!----  <div class="input-field">
                        <input type="password" class="password" placeholder="Підтвердіть пароль" name="Password"  required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div> --->
                    <?php
                    $sql = "SELECT * FROM Users WHERE ID_User='$ID_User'";
                    $result = mysqli_query($linc, $sql);

                    // перевірка наявності даних у таблиці
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            // виведення даних на сторінку
                    echo '
                    <h4 style="padding-top: 50px; margin: -25px 0;">Нікнейм</h4>
                    <div class="input-field">
                        <input type="text" value="'.$row["Nickname"].'" name="Nickname" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Ім\'я</h4>
                    <div class="input-field">
                        <input type="text" value="'.$row["Name"].'" name="Name" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Прізвище</h4>
                    <div class="input-field">
                        <input type="text" value="'.$row["Surname"].'" name="Surname" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Номер телефону</h4>
                    <div class="input-field">
                        <input type="tel" pattern="[+]380[0-9]{9}" value="'.$row["Phone"].'" title="Формат телефона +380ХХХХХХХХХ" name="Phone" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Додаткова інформація</h4>
                    <div class="input-field">
                        <input type="text" value="'.$row["Personal_info"].'" name="Personal_info" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field button">
                        <a><input type="submit" name="submit" value="Змінити"></a>
                    </div>';
                        }
                    }
                    ?>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>

<?php
	if (isset($_POST['submit']))
    {
		/*if ($_POST["Password"]=="")
			{echo '
				<script>
				alert("Не введено пароль.");
				</script>';
				$error="1";
			}
		

            $result=mysqli_query($linc, "SELECT * FROM Users WHERE ID_User='$ID_User' AND Password='$_POST["Password"]'")
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
			while ($row = mysqli_fetch_array($result));  	*/
		
			mysqli_query($linc, "UPDATE Users SET
            Nickname='".$_POST["Nickname"]."',
            Surname='".$_POST["Surname"]."',
            Name='".$_POST["Name"]."',
            Phone='".$_POST["Phone"]."',
            Personal_info='".$_POST["Personal_info"]."' 
            WHERE ID_User='$ID_User'
					");
            header("Location: profile.php?ID_User=$ID_User");
		
	};		

?>           	