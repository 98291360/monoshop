<?php
session_start();
require ("config/commandes.php"); 
require ("includes/functions.php"); 

?>
<!DOCTYPE html>
<html>

  <?php include "partials/_heade.php"; ?>
  <?php include "partials/_nav.php"; ?>

      <header class="masthead">
            <div class="container px-4 px-lg-5 h-99 well ">

                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                      
                    <div class="col-lg-8 align-self-end">
               
                      
                    
                             
              
                    <div class="row gx-4 gx-lg-5 h-95 align-items-center justify-content-center well ">
                          </div>
                 
                 </div>
                </div>
            </div>
        </header>

<body>
 
<?php
  //Si le formulaire a été soumis
    if(isset($_POST['valide'])){

         if( isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc'])){

            if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc'])){
                
                $image = htmlspecialchars(strip_tags($_POST['image']));
                //$image = $_FILES['image']['name'];
                //$fichierTempo = $_FILES['photo']['tmp_name'];
                //move_uploaded_file($fichierTempo, './images/'.$image);

                 $nom = htmlspecialchars(strip_tags($_POST['nom']));
                  $prix = htmlspecialchars(strip_tags($_POST['prix']));
                   $desc = htmlspecialchars(strip_tags($_POST['desc']));

              ajouter($image, $nom, $prix, $desc);

               

                   
            }

         }
    }
    ?>

<footer>
<?php include "partials/_footer.php"; 	?>
</footer>

</body>