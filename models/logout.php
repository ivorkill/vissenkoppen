<?php
if(isset($_SESSION['user'])){
	session_destroy();
    unset($_SESSION['user']);
	header("Location:?action=login");
}
?>
<<<<<<< HEAD
<img src="images/uitlog.png" alt="succesvol uitgelogd" title="succesvol uitgelogd" width="600px" style="margin-left:30%;"/>
=======
>>>>>>> 277f543efcf87936bc44073b71c2a0c6e702823a
