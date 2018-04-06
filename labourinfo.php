<html>
	<head><title>Labourinfo</title>
			<?php  
	include("header.php");
?>
		<div class="about" id="about">
	    <div class="container">
		<div class="w3-about-grid-top">
			<div class="w3-agileits-about-grids">
					<div class="col-md-8 agile-about-right">
							<div class="w3l-banner-grids">
								<div class="slider">
									<div class="callbacks_container">
										<ul class="rslides" id="slider4">
										<li>
											<div class="w3ls-text">
												<h3>Electrician</h3>
												<p>Electrician is local form city who work for any type of electric contract. we provide a relationship between  Labour and Vendor.<span>Electrician can find work easily and Vendors can also find Labour Easily. This website is Bridge between Labour and Vendor.</span></p>
											</div>
										</li>
										<li>
										<div class="w3ls-text">
											<h3>Plumber</h3>
											<p>Plumber is local form city who work for any type of Plumbing Work. we provide a relationship between  Labour and Vendor.<span>Plumber can find work easily and Vendors can also find Labour Easily. This website is Bridge between Labour and Vendor.</span></p>
										</div>
										</li>
										<li>
										<div class="w3ls-text">
											<h3>Carpainter</h3>
											<p>Carpainter is local form city who work for any type of Wood Work. we provide a relationship between  Labour and Vendor.<span>Carpainter can find work easily and Vendors can also find Labour Easily. This website is Bridge between Labour and Vendor.</span></p>
										</div>
										</li>
										<li>
										<div class="w3ls-text">
											<h3>Mechanic</h3>
											<p>Mechanic is local form city who work for any type of Mechanical Work. we provide a relationship between  Labour and Vendor.<span>Mechanic can find work easily and Vendors can also find Labour Easily. This website is Bridge between Labour and Vendor.</span></p>
										</div>
										</li>
									</ul>
								</div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
								// You can also use "$(window).load(function() {"
								   $(function () {
								  // Slideshow 4
								   $("#slider4").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							     </script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 	</div>
 	</body>
</html>