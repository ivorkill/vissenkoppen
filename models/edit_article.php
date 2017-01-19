<?php
	 $title = ($mysqli->real_escape_string($_POST['title']));
	 $summary = ($mysqli->real_escape_string($_POST['summary']));
	 $article = ($mysqli->real_escape_string($_POST['article']));
	 $full_name = ($mysqli->real_escape_string($_POST['full_name']));

	 $sql = $mysqli->query("UPDATE articles SET title='$title', summary='$summary', article='$article', full_name='$full_name' WHERE id = $id");

	 header("Location: ?action=admin_page");
?>
