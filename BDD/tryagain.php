<?php 

session_start();
if(!$_SESSION['username']) {

 header('Location:index.php');
}
$user=$_SESSION['username'];


/*$user=$_SESSION['username'];*/
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
die();*/
if (isset($_POST['inserer_image'])) {     
               $id_article=$_POST['id_article'];
               $reference=$_POST['reference'];
               $note_de_page=$_POST['note_de_page'];
               $couleur=$_POST['couleur'];
               $id_cliche=$_POST['id_cliche'];
               $id_ville=$_POST['id_ville'];
               $id_serie=$_POST['id_serie'];
               $id_personne=$_POST['id_personne'];
               $id_sujet=$_POST['id_sujet'];
               $nbr_cliche=$_POST['nbr_cliche'];
               $description=$_POST['description'];
               $remarque=$_POST['remarque'];
               $date_photographie=$_POST['date_photographie'];
               $fichier_numerique=$_POST['fichier_numerique'];
               $negative_ou_inversible=$_POST['negative_ou_inversible'];

               $image = (file_get_contents($_FILES['photographie']['tmp_name'])); 
               $image_name = addslashes($_FILES['photographie']['name']);

                  $bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');   
                  
                  $req = $bdd->prepare("INSERT INTO photographies (idarticle,reference,date_photographie,note_de_page,fichier_numerique,nbr_cliche,negative_ou_inversible,couleur,remarque,id_cliche,id_ville,id_serie,id_personne,id_sujet,description,photographie) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                  $req->execute(array($id_article,$reference,$date_photographie,$note_de_page,$fichier_numerique,$nbr_cliche,$negative_ou_inversible,$couleur,$remarque,$id_cliche,$id_ville,$id_serie,$id_personne,$id_sujet,$description,$image)); 

                    header('Location:ajouter_photographie.php');
               }
   

?>

<?php 


    // header 
    require_once "views/header.php";

      require_once "views/nav_admin.php";
     
      echo "</header>";
 ?>

<section>
         <!-- CAROUSEL -->        
                 <div class="item">
                    <img src="public/img/tr.jpg" alt=""> 
                     <div class="carousel-text">
                      <div class="line">
                        <div class="s-12">
                                 <ul class="nav navbar-nav navbar-right">
                                    <div class="row">

                                       <form enctype="multipart/form-data" method="POST" class="customform" >
                                         <div class="line">
                                          <div class="margin">
                                             <div class="s-12 l-4">
                                                <input name="id_article" placeholder="Article" type="text" style="opacity:0.7;" required>
                                             </div>
                                            
                                             <div class="s-12 l-4">
                                                <input name="note_de_page" placeholder="Note de Page" type="text" style="opacity:0.7;" required>
                                             </div>
                                             <div class="s-12 l-4">
                                                <input name="couleur" placeholder="couleur" type="text" style="opacity:0.7;" required>
                                             </div>
                                            
                                             <div class="s-12 l-4">
                                                   <select  name="id_ville" style="opacity:0.7;" required>
                                                      <option value="1">Orléon</option>
                                                      <option value="2">La Rochelle</option>
                                                   </select>
                                             </div>
                                             <div class="s-12 l-4">
                                                   <select name="id_serie" style="opacity:0.7;" required>
                                                      <option value="1">serie1</option>
                                                      <option value="2">serie2</option>
                                                   </select>
                                             </div>
                                         
                                             <div class="s-12 l-4">
                                                <select  name="nbr_cliche" selected="selected" style="opacity:0.7;" required>
                                                   <option>Nombre de clichés :</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                   <option value="3">3</option>
                                                </select>
                                             </div>
                                             <div class="s-12">
                                                <textarea placeholder="Description ..." name="description" rows="2" cols="2"  style="opacity:0.7; max-width:100%;width: 100%;min-width:100%;height:80px;max-height:80px;min-height:80px;"></textarea>
                                             </div>
                                             <div class="s-12">
                                                <textarea placeholder="Remarque ..." name="remarque" rows="2" cols="2"  style="opacity:0.7; max-width:100%;width: 100%;min-width:100%;height:40px;max-height:40px;min-height:40px;"></textarea>
                                             </div>
                                             <div class="s-12 l-4">
                                             <label style="color:#2fcbe0;">photographie</label>
                                                <input name="photographie" title="photographie" type="file" required style="opacity:0.7;">
                                                <!-- on peut ajouter un test de l'extention -->
                                             </div>
                                             <div class="s-12 l-4">
                                                <select  selected="selected" name="negative_ou_inversible" style="opacity:0;">
                                                   <option value="negative">Negative</option>
                                                   <option value="inversible">Inversible</option>
                                                   <!-- code php pour afficher les personnes -->
                                                </select>
                                             </div>
                                             <div class="s-12 l-4">
                                                <label style="color:#2fcbbe;">date de photographie</label>
                                                <input type="date" name="date_photographie" style="opacity:0.7;text-align:center;">
                                             </div>
                                             <div class="s-12 l-4">
                                                <input name="reference" placeholder="Reference" type="text" style="opacity:0.7;" required>
                                             </div>
                                          

                                             <div class="s-12 l-4">
                                                <select  name="id_personne" style="opacity:0.7;" required>
                                                   <option value="1">Personne1</option>
                                                   <option value="2">Personne2</option>
                                                   <!-- code php pour afficher les personnes -->
                                                </select>
                                             </div>
                                             <div class="s-12 l-4">
                                                  <select  name="id_sujet" style="opacity:0.7;" required>
                                                      <option value="1">Sujet1</option>
                                                      <option value="2">Sujet2</option>
                                                      <!-- code php pour afficher touts les clichés qu'on a dans la table cliché -->
                                                   </select>
                                             </div>                                          

                                             <div class="s-12 l-4">
                                                <label style="color:#2fcb98;"> fichier numerique</label>
                                                  <input type="text" name="fichier_numerique" placeholder="Fichier numerique" style="opacity:0.7;" required>
                                             </div>
                                             <div class="s-12 l-4">
                                                   <select  name="id_cliche" style="opacity:0.7;" required>
                                                      <option value="first">Cliché</option>
                                                      <!-- code php pour afficher touts les clichés qu'on a dans la table cliché -->
                                                   </select>
                                             </div>

                                             <div class="s-12 l-4">
                                             <label style="color:#2fcbe0;">support du cliché</label>
                                                <select  name="negative_ou_inversible" style="opacity:0.7;" required>
                                                   <option value="negative">Negative</option>
                                                   <option value="inversible">Inversible</option>
                                                   <!-- code php pour afficher les personnes -->
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="s-12 l-2 center">
                                          <input type="submit" name="inserer_image" value="Ajouter" style="opacity:0.87;color:#2fcbe0;" >
                                       </div>
                                       </form>
                                    </div>
                                 </div>
                              </ul>
                       </div>
                     </div>
                  </div>
                    </div>
                 </div>
      </section>


<!-- ________________________________ end content _________________________________-->

<?php 
   require_once "views/footer.php";
 ?>