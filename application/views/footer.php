		<section class="footer">
			<div class="row2">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<h3>Contact Us</h3>
							<ul class="contactus">
								<li><i class="fa fa-phone"></i> +62 8 77 330 921 88</li>
								<li><i class="fa fa-envelope-o"></i> <a href="mailto:info@portalestates.com">info@portalestates.com</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<h3>Navigation</h3>
							<ul class="small-nav">
								<li><a href="<?php echo site_url('about-us');?>" style="color:white">ABOUT US</a></li>
								<li><a href="<?php echo site_url('disclaimer');?>" style="color:white">DISCLAIMER</a></li>
								<li><a href="<?php echo site_url('contact'); ?>" style="color:white">CONTACT</a></li>
								<li><a href="<?php echo site_url('privacy-policy'); ?>" style="color:white">PRIVACY POLICY</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row3">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 copyright">© Copyright 2016 - Portal Estates</div>
					</div>
				</div>
			</div>
		</section>
		<a href="#navigation" class="scrollup">Scroll</a>      
		<script src="<?php echo site_url(); ?>assets/frontend/js/jquery-1.11.1/jquery.min.js"></script> 
		<script src="<?php echo site_url(); ?>assets/frontend/js/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo site_url(); ?>assets/frontend/js/bootstrap-hover/twitter-bootstrap-hover-dropdown.min.js"></script> 
		<script src="<?php echo site_url(); ?>assets/frontend/js/sidr/jquery.sidr.min.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/sticky/jquery.sticky.js"></script>        
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/contact/contact-form.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/styleswitcher/styleswitcher.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/retina/retina.js"></script> 
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/fitvids/jquery.fitvids.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/js/custom/custom.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/frontend/lazyload.min.js"></script>
		<script type="text/javascript">
			$(function() {
			    $("img.lazy").lazyload({
			    	 effect : "fadeIn"
			    });
			});
		</script>
		<?php
		if(!empty($countdown))
		{
			?>
			<script type="text/javascript" src="<?php echo site_url();?>assets/frontend/jquery.countdown360.js"></script>
			<script type="text/javascript">
		 	var countdown =  $("#countdown").countdown360({
       	 	radius      : 60,
         	seconds     : 15,
         	fontColor   : '#FFFFFF',
         	autostart   : false,
         	onComplete  : function () {
         		document.getElementById("countdown").style.display = "none";
         		document.getElementById("link").style.display = "block";
         		}
		   });
			countdown.start();
			console.log('countdown360 ',countdown);
		  </script>
			<?php
		}
		?>
	</body>
</html>