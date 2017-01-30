<?php
	$sql = "SELECT * FROM articles";
	$result = $mysqli->query($sql);
	while($article = $result->fetch_assoc()){
		$articles[] = $article;
	}

	return $articles;
?>
