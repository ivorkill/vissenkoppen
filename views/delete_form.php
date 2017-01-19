<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
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
<a href="?action=admin_page">Ga Terug</a>
<a href="?action=delete_article&id=<?php echo $id; ?>">Verwijder</a>
