<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<div class="container">
	<div class="header">
		<a href="?action=logout">Logout</a>
	</div>
	<div class="admin_page">
		<table border='1' cellspacing='0' cellpadding='10'>
		<tr>
		<th>Titel</th>
		<th>Samenvatting</th>
		<th>Datum</th>
		<th></th>
		<th></th>
		<th></th>
		</tr>
		<?php
			foreach ($articles as $article_list) {
				$title = $article_list['title'];
				$summary = $article_list['summary'];
				$date = $article_list['date'];
				$full_name = $article_list['full_name'];
				$id = $article_list['id'];
				echo "<tr>";
				echo "<td>".$title."</td>";
				echo "<td>".$summary."</td>";
				echo "<td>".$date."</td>";
				echo "<td><a href='?action=edit_form&id=".$id."'>Pas aan</a></td>";
				echo "<td><a href='?action=upload_image_form&id=".$id."'>Upload foto</a></td>";
				echo "<td><a href='?action=delete_form&id=".$id."'>Verwijder artikel</a></td>";
				echo "</tr>";
			}
		?>
		</table>
		<a href='?action=input_form'>Voeg artikel toe</a>
	</div>
</div>
