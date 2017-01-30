<?php
	$sql = "SELECT * FROM articles JOIN images ON articles.id = images.article_id WHERE articles.id = $id AND images.article_id = $id";
	$result = $mysqli->query($sql);
	$article = $result->fetch_assoc();

	return $article;
?>
