<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<form class="admin_input" action="?action=send_article" method="post">
	<label for="title">Titel: <input type="text" name="title" placeholder="Title" autofocus required></label>
	<label for="article">Tekst: <input type="text" name="article" placeholder="Article" required></label>
	<label for="summary">Samenvatting: <input type="text" name="summary" placeholder="Summary" required></label>
	<input type="submit" name="send" value="Verstuur">
</form>
<a href="?action=admin_page">Ga Terug</a>
