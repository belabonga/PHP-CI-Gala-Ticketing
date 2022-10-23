		<body>
		<!-- header -->
		<div id="home" class="header">

			<!-- container -->


			<div class="container">

				<div class="top-nav">
					
				</div>
				<?php
				$notif = $this->session->flashdata('notif');
				if (!empty($notif)) {
				echo $notif;
				}
				?>
				<div class="clearfix"> </div>
				<!-- banner Slider starts Here -->
	  			<script src="<?php echo base_url('assets/');?>js/responsiveslides.min.js"></script>
				 <script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
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
				<!--//End-slider-script -->

				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<?php
						foreach ($perfrom as $s) {
						?>
						<li>
							<div class="header-info">
								<p>LIVE <?php echo $s['show_name'];?></p>
								<p>BY<span> <?php echo $s['show_by'];?></span></p>
								<p>	AT <?php echo $s['place'];?></p>
								<div class="red"><?php echo $s['show_date'];?></div>\
							</div>
						</li>
						<?php
						}
						?>
					</ul>
					<div class="clearfix"> </div>
					<!-- banner Slider Ends Here --> 
				</div>

			</div>
			<!-- container -->
		</div>
		<!-- header -->


		<!-- about -->
		<div id="about" class="about">
			<!-- container -->	
			<div class="container">
				<h3>What is Galasesa?</h3>
			</div>
			<!-- container -->	
			<!-- about-info -->
			<div class="about-info">
				<!-- container -->	
				<div class="container">
					<div class="col-md-8 about-info-left">
						<p>Galasesa adalah singkatan dari Gebyar Malam Seni Wikusama. Ini adalah acara tahunan yang diadakan oleh SMK Telkom Malang sebagai ajang untuk Reuni sekaligus perpisahan bagi kelas 3. Acara ini diperuntukkkan untuk semua warga SMK Telkom Malang termasuk alumni untuk bersama-sama menikmati sajian seni tersebut.

						<span>Acara ini selalu diadakan seusai wisuda pada malam hari, dan mendatangkan artis-artis ternama.</span></p>

						<p class="bottom-text">"Galasesa adalah acara tahunan yang keren banget! Wajib ditonton oleh seluruh warga maupun alumni SMK Telkom Malang. Acara ini benar benar keren sekali!" - Salah Satu Alumni Angkatan 16</p>
						<div class="map">
							<img src="<?php echo base_url('assets/');?>images/header_coba.jpg" alt="" />
						</div>
					</div>
					</div>
					
					<div class="clearfix"> </div>
			</div>
		</div>

		<!-- NYOBA TUNNEL BEAR -->
		<section class="off-white" id="features">
		<div id="ticket" class="section-inner-wrap">
			<div style="display:flex;justify-content:center;align-items:center;">
  				<div style="width:150px;height:150px;">
  					<img src="assets/images/ticket.png">
  				</div>
			</div>

			<h1><b>Tickets</b></h1>
			<h3>What's included with my package?</h3>

			<div class="row">
  				<div class="col">
 <!--GOLD--><!--GOLD--><!--GOLD--><!--GOLD--><!--GOLD--><!--GOLD--><!--GOLD-->
  					<div class="row">
  						<div class="col-md-4">
							<div class="box">
								<h1><strong>GOLD</strong></h1>
								<h4>Rp. 150.000</h4>
								<br>
									<ul> 
										<li> 
											Golden Ticket
										</li>
										<li>
											Galasesa T-Shirt
										</li>
										<li>
											Exclusive Totebag
										</li>
										<li>
											Light Up Wristbands
										</li>
										<li>
											Voucher from Sponsorship
										</li>
										<li>
											Snack
										</li>
									</ul>
							</div>
  						</div>
<!--SILVER--><!--SILVER--><!--SILVER--><!--SILVER--><!--SILVER--><!--SILVER-->
						<div class="row">
  						<div class="col-md-4">
							<div class="box">
								<h1><strong>SILVER</strong></h1>
								<h4>Rp. 100.000</h4>
								<br>
									<ul> 
										<li> 
											Silver Ticket
										</li>
										<li>
											Exclusive Totebag
										</li>
										<li>
											Light Up Wristbands
										</li>
										<li>
											Snack
										</li>
									</ul>
							</div>
  						</div>
<!--BRONZE--><!--BRONZE--><!--BRONZE--><!--BRONZE--><!--BRONZE--><!--BRONZE-->
						<div class="row">
  						<div class="col-md-4">
							<div class="box">
								<h1><strong>BRONZE</strong></h1>
								<h4>Rp. 75.000</h4>
								<br>
									<ul> 
										<li> 
											Bronze Ticket
										</li>
										<li>
											Light Up Wristbands
										</li>
										<li>
											Snack
										</li>
									</ul>
							</div>
  						</div>
					</div>

					<div class="row">
  					<div class="col-md-4">
  						<a class="btn gold" href="<?php echo base_url('home/detail/6051700');?>"> Get Ticket</a>
  					</div>
  					<div class="col-md-4">
  						<a class="btn gold" href="<?php echo base_url('home/detail/6051701');?>"> Get Ticket</a>
  					</div>
  					<div class="col-md-4">
  						<a class="btn gold" href="<?php echo base_url('home/detail/6051702');?>"> Get Ticket</a>
  					</div>
				</div>

  				</div>

		</div>
		</section>


		<!-- portfolio -->
		<div class="portfolio">
			<!-- container -->
			<div class="container">
				<h3>Last Year Galasesa</h3>
				<div class="gallery-images">
					<div class="gallery-image">
						<img src="<?php echo base_url('assets/');?>images/3.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="<?php echo base_url('assets/');?>images/4.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image right">
						<img src="<?php echo base_url('assets/');?>images/5.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="<?php echo base_url('assets/');?>images/7.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="<?php echo base_url('assets/');?>images/6.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image right">
						<img src="<?php echo base_url('assets/');?>images/8.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="gallery-text">
					
					</div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- portfolio -->
		