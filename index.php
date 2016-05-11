<!DOCTYPE html>
<html lang="en" ng-app="pageApp">
	
  <?php include('includes/head.php'); ?>
	
  <body ng-controller="frontPageContent">

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
        

        <div class="col-xs-12 col-sm-9 mainarea" >
			
			   <span ng-bind-html="pagecontent.content"></span>


			<br>
			<ul class="list-inline social-buttons">
        <li><a href="http://www.facebook.com/pages/KF-KuntosaliFitness/134050073323567"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="https://vimeo.com/user26562454"><i class="fa fa-vimeo-square fa-2x"></i></a></li>
        <li><a href="https://twitter.com/arikatajisto"><i class="fa fa-twitter fa-2x"></i></a></li>
      </ul>
			
		</div>
	</div>

  <?php include('includes/download.php'); ?>

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