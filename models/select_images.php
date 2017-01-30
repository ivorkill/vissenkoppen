<?php
$id = (empty($_GET['id'])) ? '' : $_GET['id'];
	$sql = "SELECT * FROM images WHERE article_id = $id";
	$result = $mysqli->query($sql);
	while ($image = $result->fetch_assoc()) {
		$images[] = $image;
	}
  if (isset($images)) {
  	return $images;
  }
?>
