<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
foreach ($single_article as $article_list) {
$title = $article_list['title'];
$summary = $article_list['summary'];
$article = $article_list['article'];
$id = $article_list['id'];
?>
<a href="?action=admin_page"><img src="images/terug_1.png" onmouseover="this.src='images/terug_2.png'" onmouseout="this.src='images/terug_1.png'" width="180px;" alt="ga terug" title="Ga terug" style=""/></a>
<div class="vlak">
<form class="edit_form" action="?action=edit_article&id=<?php echo $id;?>" method="post">
	<label for="title">Titel: </label><input type="text" name="title" value="<?php echo $title;?>">
	<div class="textarea"><label for="summary">Samenvatting: </label><textarea name="summary" ><?php echo $summary;?></textarea></div>
	<div class="textarea"><label for="article">Artikel: </label><textarea name="article"><?php echo $article;?></textarea></div>
	<input type="submit" name="send" value="Verstuur">
	<?php
	}
	?>
</form>
</div>
