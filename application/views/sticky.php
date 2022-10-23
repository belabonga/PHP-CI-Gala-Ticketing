<!-- sticky -->
		<div class="sticky">
			<div class="container">
				<div class="top-header">
					<div class="fixed-header">
					<div class="sticky-logo">
						<h1><a class="scroll" href="#home">Galasesa <span>2017</a> </span></h1>
					</div>	
					<div class="sticky-nav">
						<ul>
							<li><a class="scroll" href="#about">About</a></li>   
							<li><a class="scroll" href="#event">Event</a></li>
							<li><a class="scroll" href="#contact">Contact</a></li>
							<?php 
							if ($this->session->userdata('logged_in') == TRUE) {
								echo '<li><a href="'.base_url().'home/order">Order View</a></li>';
							} else {
								echo '<li></li>';
							}
							?>
						</ul>
					</div>
					<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			
		</div>

		<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".top-header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".top-header").addClass("fixed");
				}else{
					$(".top-header").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->