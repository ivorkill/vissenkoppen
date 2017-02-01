<?php
	 $title = ($mysqli->real_escape_string($_POST['title']));
	 $summary = ($mysqli->real_escape_string($_POST['summary']));
	 $article = ($mysqli->real_escape_string($_POST['article']));

	 $sql = $mysqli->query("UPDATE articles SET title='$title', summary='$summary', article='$article' WHERE id = $id");

	 header("Location: ?action=admin_page");
?>
