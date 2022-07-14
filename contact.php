<!DOCTYPE html>
<html>

  <?php include "partials/_heade.php"; ?>
  <?php include "partials/_nav.php"; ?>

<body>

    <header class="masthead">
            <div class="container px-4 px-lg-5 h-99 well ">

                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                      
                    <div class="col-lg-8 align-self-end">
               
                      
                    <h1 class="text-white font-weight-bold text-center">Contact Us</h1>
                             <hr class="divider" />
              
                    <div class="row gx-4 gx-lg-5 h-95 align-items-center justify-content-center well ">

                    <form  action="register.php" method="post" class="well col-md-6" >
                        
                        <!--  Name field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="name"></label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name *">                        
                        </div>

                           <!--email field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="email" ></label>
                            <input type="email" name="email" data-parsley-minlength="3" class="form-control" id="email" required="required" placeholder="Your Email *">
                        </div>

                           <!--phone field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="phone" ></label>
                            <input type="text" name="phone" data-parsley-trigger="keypress" class="form-control" id="phone" required="required"  placeholder="Your Phone *">
                        </div>

                          <!--message fie-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="message"></label>
                            <textarea type="text" name="message" class="form-control" id="message" required="required" placeholder="Your Message *"> </textarea>
                        </div>
                         
                        <input type="submit" name="register" class="btn btn-primary mt-3" value="SEND MESSAGE" >
                     
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
