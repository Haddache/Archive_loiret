
<?php 
session_start();
if(!$_SESSION['username'])
 header('Location:index.php'); 

$user=$_SESSION['username'];

if (isset($_GET['id_article'])) { 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');
            $idarticle = $_GET['id_article'];

                  $req = $bdd->prepare("DELETE FROM photographies WHERE idarticle = ? ");

                  $req->execute(array($idarticle)); 

                    header('Location:supprimer.php');
               }


?>