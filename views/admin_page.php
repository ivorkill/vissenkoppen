<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<div class="container">
		<a href="?action=logout"><img src="images/uitloggen.png" onmouseover="this.src='images/terug_2.png'" onmouseout="this.src='images/uitloggen.png'" width="180px;" alt="uitloggen" title="uitloggen"/></a>
<div class="container">
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
				echo "<td width='80px'>".$title."</td>";
				echo "<td width='300px'>".$summary."</td>";
				echo "<td>".$date."</td>";
				echo "<td><a href='?action=edit_form&id=".$id."'>Pas aan</a></td>";
				echo "<td><a href='?action=upload_image_form&id=".$id."'>Upload foto</a></td>";
				echo "<td><a href='?action=delete_form&id=".$id."'>Verwijder artikel</a></td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>
	<a href='?action=input_form'><img src="images/nieuw_1.png" onmouseover="this.src='images/nieuw_2.png'" onmouseout="this.src='images/nieuw_1.png'" width="150px;" style="padding-left: 5px;" alt="voeg artikel toe" title="voeg artikel toe"/></a>
	</div>
</div>
