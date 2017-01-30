<?php
	$result = $mysqli->query("DELETE FROM articles WHERE id = $id");

	header("Location: ?action=admin_page");
?>
