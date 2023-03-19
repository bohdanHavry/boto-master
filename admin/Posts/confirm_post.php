<?php
	include "../../include/include.php"; //Підключення до бази даних	
    $id_post = $_GET['post_id'];
		$query = mysqli_query($linc, "UPDATE Posts SET post_status = 'Опубліковано' Where post_id = $id_post");
	         header("Location: list_posts.php");

?>