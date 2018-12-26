
		<footer class="footer pt-50">
			<!-- <div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 footer_logo">
						<a href="index.html"><img src="assets/images/footer_logo.png" alt=""></a>
						<p>
							Lorem ipsum dolor amet natum latine copiosa at quo, suas labore saperet has there any quote for write lorem percit latineu suas dummy.
						</p>
						<ul>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>

					<div class="col-md-6 col-lg-2 mt-xs-30 link_footer">
						<h4>Information</h4>
						<ul>
							<li>
								<a href="#">About us</a>
							</li>
							<li>
								<a href="#">Service</a>
							</li>
							<li>
								<a href="#">Project</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

					<div class="col-md-6 col-lg-3 mt-sm-30 mt-xs-30 footer-latest-news">
						<h4>Latest News</h4>
						<div class="single-news">
							<h5><a href="#">How can be successfull in market place..</a></h5>
							<span>13 Nov, 2018  /  Business</span>
						</div>
						<div class="single-news">
							<h5><a href="#">How can be successfull in market place..</a></h5>
							<span>13 Nov, 2018  /  Business</span>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mt-sm-30 mt-xs-30 footer-subscribe">
						<h4>Subscribe Us</h4>
						<p>
							Lorem ipsum dolor amet natum latine copiosa at quo, suas labore saperet has there any quote.
						</p>
						<form action="#">
							<input type="text" placeholder="Enter your e-mail">
							<button class="btn-text">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</button>
						</form>

					</div>

				</div>
			</div> -->
			<div class="bottom-footer text-center">
				<div class="container">
					<div class="bor_top clearfix">
						<p>
							Copyright © <?php echo getdate()['year'];?> Web Developer. All rights reserved <a href="#">Web Developer</a>
						</p>

					</div>
				</div>
			</div>
		</footer>

		<!-- Site Wraper End -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/tether.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.easing.js" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="<?php echo base_url()?>assets/assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="<?php echo base_url()?>assets/assets/js/owl.carousel.js" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="<?php echo base_url()?>assets/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="<?php echo base_url()?>assets/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="<?php echo base_url()?>assets/assets/js/mail.js" type="text/javascript"></script>

		<!-- revolution Js -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.revolution.js"></script>
		<!-- custom Js -->
		<script src="<?php echo base_url()?>assets/assets/js/custom.js" type="text/javascript"></script>
		
		
		<!--prettyPhotoprettyPhoto-->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.prettyPhoto.js"></script>
		<!-- Fun Factor / Counter -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- Price Filter -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/price-filter.js"></script>
		
		<script>
      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: -4.081560, lng: 123.201193}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: -4.081560, lng: 123.201193}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vZmPIxxe6rCwlvcUiJVH7dImCU6OP6c&callback=initMap"
    async defer></script>

		<!-- Get Limit Rows using ajax -->
								<script type="text/javascript">
									function getrows(angka){
										var product_code = angka;
										console.log(product_code);
										$.ajax({
											success:function(){
												<?php if($this->uri->segment(2)=='result'){ ?>
														location.href='<?php echo base_url()?>index.php/Home/result/'+angka;
												<?php  }else{ ?>
														location.href='<?php echo base_url()?>index.php/Home/foto/'+angka;
												<?php } ?>
											}
										});
									}
								</script>
	</body>
</html>
