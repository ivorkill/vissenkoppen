<?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;
$article_id = (empty($_GET['id'])) ? '' : $_GET['id'];

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['images']['name'] as $f => $name) {
	    if ($_FILES['images']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }
	    if ($_FILES['images']['error'][$f] == 0) {
	        if ($_FILES['images']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large images
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded images
	            if(move_uploaded_file($_FILES["images"]["tmp_name"][$f], $path.$name)){
					$sql = "INSERT INTO images (article_id, image) VALUES ('$article_id','$path$name')";
					$results = $mysqli->query($sql);
				}
	            $count++; // Number of successfully uploaded file
				header("Location: ?action=admin_page");
	        }
	    }
	}
}
?>
