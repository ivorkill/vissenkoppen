<?php
$title = ($mysqli->real_escape_string($_POST['title']));
$article = ($mysqli->real_escape_string($_POST['article']));
$summary = ($mysqli->real_escape_string($_POST['summary']));
$full_name = ($mysqli->real_escape_string($_POST['full_name']));
$sql =$mysqli->query("INSERT INTO articles (title, article, summary, full_name) VALUES ('$title', '$article', '$summary', '$full_name')");

header("Location: ?action=admin_page")

?>
