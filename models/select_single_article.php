<?php
	$sql = "SELECT * FROM articles WHERE id = $id";
	// $result = $mysqli->query($sql);

	// $sql = "SELECT * FROM articles JOIN images ON articles.id = images.article_id WHERE articles.id = $id AND images.article_id = $id";
	$result = $mysqli->query($sql);
  while ($article = $result->fetch_assoc()) {
		$single_article[] = $article;
	}

  if (isset($single_article)) {
	   return $single_article;
  }
?>
