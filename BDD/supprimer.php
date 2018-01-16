<?php 
      session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');

if(!$_SESSION['username']) {

 header('Location:index.php');
}
$user=$_SESSION['username'];

      // header 
      require_once "views/header.php";

      require_once "views/nav_admin.php";
      echo "</header>";
 ?>

 <!-- ________________________________ content _________________________________-->
      <section>
         <!-- CAROUSEL -->  	
         <div class="item">
                    <img src="public/img/loiret4.jpg" alt=""> 
                     <div class="carousel-text">
                      <div class="line">
                        <div class="s-12">
                           <?php
                              require_once "nos_archives_supprimer.php";
                           ?>
                        </div>
                     </div>
                  </div>
         </div>


      </section>

<!-- ________________________________ end content _________________________________-->

<?php 
	require_once "views/footer.php";
 ?>