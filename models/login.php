<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']) . "r8YPQLu9");
	$session = hash('sha512', $username + $password);
	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array();
	$count = $result->num_rows;
	if($count == 1){
		$_SESSION['user'] = $admin;
		$_SESSION['id'] = $session;
		$_SESSION['user'] = $session;
		header("Location: ?action=admin_page");
	}
	else{
		echo "Je wachtwoord en/of gebruikersnaam is invalide<br>";
		?>
		<a href="?action=login">Ga Terug</a>
		<?php
	}
}
?>
