
<?php require ("config/commandes.php"); ?>

<?php require ("config/connect.php"); ?>


<!DOCTYPE html>
<html>

  <?php include "partials/_heade.php"; ?>
  <?php include "partials/_nav.php"; ?>

<body>

	  <header class="masthead">
            <div class="container px-4 px-lg-5 h-99 well ">

                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                      
                    <div class="col-lg-8 align-self-end">
               
                      
                    <h1 class="text-white font-weight-bold text-center">Ajouter un nouveau Produit</h1>
                             <hr class="divider" />
              
                    <div class="row gx-4 gx-lg-5 h-95 align-items-center justify-content-center well ">

                    <form action="ajouter.php" data-parsley-validate method="post" class="well col-md-6" >
        
                           <!--Prix field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="prix" >Prix:</label>
                            <input type="text" name="prix" data-parsley-trigger="keypress" class="form-control" id="prix" required="required"  placeholder="Produit Price *">
                        </div>

                        <input type="submit" name="valide" class="btn btn-primary mt-3" value="Ajouter" >
                     
                    </form>
                </div>
                 
                 </div>
                </div>
            </div>
        </header>

        <!--footer-->
        <?php include "partials/_footer.php"; ?>
</body>
</html>


