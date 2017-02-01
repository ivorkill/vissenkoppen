<?php
	$sql = "SELECT * FROM articles ORDER BY date DESC";
	$result = $mysqli->query($sql);
	while($article = $result->fetch_assoc()){
		$articles[] = $article;
	}

	return $articles;
?>
