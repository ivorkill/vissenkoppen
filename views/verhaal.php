<body>
	<a href="?action=home">
		<div class="back"></div>
	</a>
<?php
if (isset($images) && isset($single_article)) {
	echo '<h1 class="title">'.$single_article[0]["title"].'</h1>';
?>
<div class="container2">
	<div class="kaders">
	<?php
	if (isset($images)) {
		for ($i=0; $i < sizeof($images); $i++) {
			echo '
			<div class="image">
				<a href='.$images[$i]["image"].' data-lightbox="vissenkop" title="vissenkop2">
				<img src='.$images[$i]["image"].' align="middle"/>
				</a>
				</div>
			';
		}
	}
	?>
	</div>
	<?php
		echo "
		<div class='tekst'>
			".$single_article[0]["article"]."
		</div>";
	 ?>
</div>
</body>
<?php
}
?>
