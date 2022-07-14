
<?php 
require "includes/_header.php";
$Produits=afficher();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MonoShop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/css/styles.css" rel="stylesheet" />
        
    </head>
    <?php include "partials/_nav.php"; ?>
    <body id="page-top">
      
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                        <a class="btn btn-primary btn-xl" href="#services">Effectuer des Achats</a>
                    </div>
                </div>
            </div>
        </header>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <!-- About-->
  
        <!-- Services-->
     
        <!-- Portfolio-->
         <h2 class="text-center mt-0 "  id="services">Nos Produits</h2>
                <hr class="divider" />
 <div class="card shadow-sm" >

     <div class="card-body">

        <div class="container px-4 px-lg-5">
      <div class="row">
          <?php foreach($Produits as $produit):?>
                    <div class="col-lg-4 text-center mt-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle h-50 w-50" src="  <?php echo  $produit->image; ?>" style="height: 150px ; width: 150px;" >
                            <h4 class="mt-2"><?= $produit->name?></h4>
                            <p class="text-muted"><?= substr($produit->description, 0, 200); ?></p>
                             <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      
                                   <a href="addpanier.php?id=<?php echo $produit->id; ?>">   <input type="submit" name="acheter" class="btn-sm btn-outline-secondary" value="Ajouter au pannier"> </a>
                                     
                                    </div>
                                    <small class="text-muted"><?= $produit->prix?> cfa</small>
                             </div>
                             <div  class="mt-3">

                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>

         <?php endforeach;?>
         <div>
             <a class="btn btn-primary btn-xl" href="nosproduit.php">Voir Plus</a>
         </div>
                   
        <!-- Call to action-->
   
        <!-- footer-->
<?php include "partials/_footer.php"; ?>
    </body>
</html>
