<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<a href="?action=admin_page"><img src="images/terug_1.png" onmouseover="this.src='images/terug_2.png'" onmouseout="this.src='images/terug_1.png'" width="180px;" alt="ga terug" title="Ga terug" style=""/></a>
<div class="vlak">
<h2>Artikel toevoegen</h2>
<form class="admin_input" action="?action=send_article" method="post">
	<label for="title">Titel: <input type="text" name="title" placeholder="Titel" autofocus required></label>
	<div class="textarea"><label for="summary">Samenvatting: <textarea name="summary" placeholder="Samenvatting" required></textarea></label></div>
	<div class="textarea"><label for="article">Verhaal: <textarea name="article" placeholder="Verhaal" required></textarea></label></div>
	<input type="submit" name="send" value="Verstuur">
</form>
</div>
