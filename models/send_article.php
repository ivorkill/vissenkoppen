<?php
$title = ($mysqli->real_escape_string($_POST['title']));
$article = ($mysqli->real_escape_string($_POST['article']));
$summary = ($mysqli->real_escape_string($_POST['summary']));
$sql =$mysqli->query("INSERT INTO articles (title, article, summary) VALUES ('$title', '$article', '$summary')");

header("Location: ?action=admin_page")

?>
