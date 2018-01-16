<?php
session_start();

if (isset($_POST['seconnecter'])) {
	$username=$_POST['Username'];
	$password=$_POST['password'];
	$password=sha1($password);

	if ($username&&$password) {
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');	
		$req = $bdd->prepare("SELECT * FROM administrateurs WHERE username='$username' && password='$password'");
        $req->execute();
        $row = $req->rowCount();

		if($row==1){
			$_SESSION['username']=$username;
			header('Location:administrateur.php');
		}
		else{header('Location:index.php');}
	}
}
?>