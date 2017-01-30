<?php
	$result = $mysqli->query("DELETE FROM articles WHERE id = $id");

	$sql = $mysqli->query("DELETE FROM images WHERE article_id = $id");
	header("Location: ?action=admin_page");
?>
