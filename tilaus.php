<?php

require_once ('includes/functions.php');

if(isset($_POST["submit"])){


sendMail($_POST["tyyppi"], 
     $_POST["tilaaja"],
     $_POST["osoite"],
     $_POST["posti_nro"],
     $_POST["kaupunki"],
     $_POST["email"],
     $_POST["puhelin"]
     );

header("Location: kiitos.php");

}


?>
<!DOCTYPE html>
<html lang="en">
	
  <?php include('includes/head.php'); ?>
	
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fi_FI/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="page-container">
  
    <?php include('includes/topnav.php'); ?>
      
    <div class="container">

      <?php include('includes/banners.php'); ?>


      <div class="row row-offcanvas row-offcanvas-left">
        
        <?php include('includes/nav.php'); ?>
  	
        <!-- main area -->
        

        <div class="col-xs-12 col-sm-9 contentarea" >
			
			   <h1>Tilaa Kuntosali &amp; Fitness</h1>
          
          <form method="post" action="<?php print $_SERVER['PHP_SELF'] ?>" class="form-horizontal">
          


            <div class="form-group">
              <label for="inputOrderType" class="col-sm-2 control-label">Tilaustyyppi</label>
              <div class="col-sm-10">
                <select name="tyyppi" class="form-control" id="inputOrderType">
                  <option value="kotiin">Kotiin 19 euroa / vuosi</option>
                  <option value="yritykseen30">Yritykseen 30-100 kpl nippuina 69 euroa / vuosi</option>
                  <option value="yritykseen100">Yritykseen 101-250 kpl nippuina 79 euroa / vuosi</option>
                  <option value="yritykseen250">Yritykseen yli 250 kpl nippuina 99 euroa / vuosi</option>
                 </select>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Lehden tilaaja *</label>
              <div class="col-sm-10">
                <input type="text" name="tilaaja" size="40" class="form-control" />
              </div>
            </div>      
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Osoite *</label>
              <div class="col-sm-10">
                <input type="text" name="osoite" size="40" class="form-control" />
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Postinumero *</label>
              <div class="col-sm-10">
                <input type="text" name="posti_nro" size="10" maxlength="5" class="form-control" />
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Postitoimip. *</label>
              <div class="col-sm-10">
                <input type="text" name="kaupunki" size="40" class="form-control" />
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Email. *</label>
              <div class="col-sm-10">
                <input type="text" name="email" size="40" class="form-control" />
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Puhelin *</label>
              <div class="col-sm-10">
                <input type="text" name="puhelin" size="40" class="form-control" />
              </div>
            </div>
      
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <p>
              Tähdellä (*) merkityt kentät ovat pakollisia.
            </p>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" name="submit" value="Tilaa">
              </div>
            </div>
          
          </form>
          

			
			
			
		</div>
	</div>


  <?php include('includes/blogit.php'); ?>


  </div><!--/.container-->

  <?php include('includes/footer.php'); ?>

</div><!--/.page-container-->
	 <?php include('includes/scripts.php'); ?>

		<script type="text/javascript">
    		swfobject.embedSWF("images/precor.swf", "precor", "100", "100", "9.0.0");
    		swfobject.embedSWF("images/qicraft.swf", "qicraft", "120", "550", "9.0.0");
 	   </script>

	</body>
</html>