<?php
if(isset($_SESSION['user'])){
	session_destroy();
    unset($_SESSION['user']);
	header("Location:?action=login");
}
?>
<img src="images/uitlog.png" alt="succesvol uitgelogd" title="succesvol uitgelogd" width="600px" style="margin-left:30%;"/>
