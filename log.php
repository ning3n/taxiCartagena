<!DOCTYPE HTML>
<html>
<head>
<title>RADIO TAXI CARTAGENA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--webfonts-->
  <link href='//fonts.googleapis.com/css?family=PT+Mono|Abril+Fatface' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>

	<div class="contact">
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10015.498657932954!2d-0.1570060357124469!3d51.129219866008135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875f1c859d0e855%3A0xb0ce82410da5809!2sA2011%2C+Crawley%2C+West+Sussex+RH10%2C+UK!5e0!3m2!1sen!2sin!4v1409743498026" frameborder="0" style="border:0"></iframe>
				<br>

				<div class="contact-form">
					<div class="contact-head">
						<h4>S</h4>
					 </div>
					 <br>
					
					<form action=decide.php method=post> 
					     <input type="text" class="text" name=usuario required="" placeholder="USUARIO">
						 <input type="text" class="text" name=clave required="" placeholder="CLAVE">
						
						
						<div class="clearfix"> </div>
						<div class="sub-button">
							<input name="submit" type="submit" value="INGRESAR ">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--footer-->
			<div class="footer">
				<div class="container">
					<div class="copy">
		              <p> All Rights Reserved | Design by <a href="#">IMJSOFT</a> </p>
		            </div>
					
				</div>
			</div>
				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>

