<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['user'])){
   header("location: ?action=login");
}
?>
<div class="vlak">
<form class="image_upload" action="?action=img_upload&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
	<h2>Upload afbeelding</h2>
	<input type="file" name="images[]" multiple="multiple" accept="image/*">
	<input type="submit" name="submit" value="Send">
</form>
</div>
