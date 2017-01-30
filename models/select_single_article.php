<?php
$id = (empty($_GET['id'])) ? '' : $_GET['id'];
	$sql = "SELECT * FROM articles WHERE id = $id";
	$result = $mysqli->query($sql);
	while ($article = $result->fetch_assoc()) {
		$single_article[] = $article;
	}
  if (isset($single_article)) {
	   return $single_article;
  }
?>
