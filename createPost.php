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
	<link rel="stylesheet" href="css/loginforms.css"/>
    <title>Створення поста</title>
</head>
<body>
    <div class="container active">
        <div class="forms">
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Створення поста</span>
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <h4 style="padding-top: 50px; margin: -25px 0;">Заголовок поста</h4>
                    <div class="input-field">
                        <input type="text" name="post_title" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Опис поста</h4>
                    <div class="input-field">
                        <input type="text"  name="post_description" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <h4 style="padding: 50px 0; margin: -25px 0;">Виберіть файл для основного зображення</h4>
                    <div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"></input>
                        <input type="file" name="my_file_one[]"></input>
                    </div>
                    <h4 style="padding-top: 50px; margin: -25px 0;">Автор проекту</h4>
                    <div class="input-field">
                        <input type="text" name="artist_name" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <h4 style="padding: 50px 0; margin: -25px 0;">Оберіть категорію</h4>
                    <?php
                        $query_group = mysqli_query($linc, "SELECT * FROM Categories");
                        echo  '<select class="form-control" name="category" id="sel1" size="5" style="color:#0c0e0c;"';
                        echo '<option value="category_id"></option>';
                        while ($temp = mysqli_fetch_assoc($query_group))
                        {
                        echo '<option style="color:#0c0e0c;" value='.$temp['category_id'].'>'.$temp['category_name'].'</option>';
                        }
                        echo "</select>";
                    ?>

                    <div class="input-field button">
                        <input type="submit" name="submit" value="Додати">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>

<?php
	if (isset($_POST['submit']))
    {	
			mysqli_query($linc, "INSERT INTO Posts SET
            post_title='".$_POST["post_title"]."',
            post_description='".$_POST["post_description"]."',
            post_image='',
            artist_name='".$_POST["artist_name"]."',
            created_at='',
            user_id='1',
            category_id='".$_POST["category"]."',
            post_status='Очікує'
					");

                    echo '<pre>';
                    echo print_r($_POST);
                    echo '</pre>';
            //header("Location: profile.php?ID_User=$ID_User&message=success");
		
	};		
    $post_id = mysqli_insert_id($linc);
    if (isset($_FILES['my_file_one'])) 
    {$myFile1 = $_FILES['my_file_one'];
     include("upload-image.php");
    }
?>