<?php
  function getImage($id, $mysqli){
  	$sql = "SELECT * FROM images WHERE article_id = $id LIMIT 1";
  	$result = $mysqli->query($sql);
  	while ($image = $result->fetch_assoc()) {
  		$images[] = $image;
  	}
    if (isset($images)) {
    	return $images;
    }
  }
?>
