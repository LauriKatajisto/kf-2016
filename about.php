<!DOCTYPE html>
<html lang="en" ng-app="pageApp">
	
  <?php include('includes/head.php'); ?>
	
<body ng-controller="aboutPageContent">

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
			 <span ng-bind-html="pagecontent.content"></span>
        
            
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