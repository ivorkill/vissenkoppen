<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<a href="?action=admin_page"><img src="images/terug_1.png" onmouseover="this.src='images/terug_2.png'" onmouseout="this.src='images/terug_1.png'" width="180px;" alt="ga terug" title="Ga terug"/></a>
<div class="delete">
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>Titel</th>
			<th>Samenvatting</th>
			<th>Artikel</th>
		</tr>
		<tr>
			<?php
				foreach ($single_article as $article_list) {
					$title = $article_list['title'];
					$summary = $article_list['summary'];
					$article = $article_list['article'];
			?>
			<td><?php echo $title;?></td>
			<td><?php echo $summary; ?></td>
			<td><?php echo $article; ?></td>
		</tr>
		<?php
			}
		?>
	</table>
</div>
<a href="?action=delete_article&id=<?php echo $id; ?>"><img src="images/verwijder.png" onmouseover="this.src='images/verwijder_2.png'" onmouseout="this.src='images/verwijder.png'" width="200px;" alt="Verwijder artikel" title="Verwijder artikel"/></a>
