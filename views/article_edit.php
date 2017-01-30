<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<form class="edit_form" action="?action=edit_article&id=<?php echo $id;?>" method="post">
	<label for="title">Titel: </label><input type="text" name="title" value="<?php echo $title;?>">
	<label for="summary">Samenvatting: </label><textarea name="summary" ><?php echo $summary;?></textarea>
	<label for="article">Artikel: </label><textarea name="article"><?php echo $article;?></textarea>
	<input type="submit" name="send" value="Verstuur">
</form>
<a href="?action=admin_page">Ga terug</a>
