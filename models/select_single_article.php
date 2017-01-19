<?php
	$sql = "SELECT * FROM articles WHERE id = $id";
	$result = $mysqli->query($sql);
	while ($article = $result->fetch_assoc()) {
		$single_article[] = $article;
	}

	return $single_article;
?>
