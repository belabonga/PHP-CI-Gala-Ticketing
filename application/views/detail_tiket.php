   	<?php
	foreach ($tiket as $row) {
		$idasli = $row->id;
		$tipe = $row->tipe_tiket;
		$detail = $row->detail_tiket;
		$stok = $row->stok;
		$images = $row->images;
		$harga = $row->harga_tiket;
		$tanggal = $row->tanggalan;
	}
	?>
<link rel="stylesheet" href="<?php echo base_url('bootstrap/');?>inistyle.css">

<br>
<br>
	
<div class="container">
	<div class="main-detail">
		<h3>Detail Ticket</h3>
		<?php
		$notif = $this->session->flashdata('notif');
		if (!empty($notif)) {
		echo $notif;
		}
		?>
	</div>
</div>
<div class="container">
	<div class="main-detail">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php echo base_url($images);?>" width="250px"/>
			</div>
			<div class="col-sm-6" style="background-color:rgba(144, 143, 143, 0.20);">
				<br>
				<ul class="list-group" style="color:rgba(0, 0, 0, 0.90);" >
					<li class="list-group-item"><b>Type Ticket : </b><?php echo $tipe;?></li>
				  	<li class="list-group-item"><b>Available : </b><?php echo $stok;?> tickets</li>
				  	<li class="list-group-item"><b>Date : </b><?php echo $tanggal;?></li>
				  	<li class="list-group-item"><b>Price : </b>Rp. <?php echo $harga;?></li>
				</ul>
			</div>
			<div class="col-sm-10" style="margin-top: 2%">
			<form action="<?php echo base_url('booking/book/'.$idasli);?>" method="post">
				<?php
				if ($this->session->userdata('logged_in') == TRUE) {
					echo '<input type="submit" name="submit" value="Book Now" class="btn btn-danger"/>';
				} else {
					echo "<h5>Please login for booking !</h5>";
				}
				?>
			</form>
			</div>
		</div>
		<br>
		<div class="main-detail">
			<h4>Description :</h4>
			<p><?php echo $detail;?></p>
		</div>

	</div> 
</div>
<div class="container">
	<div class="main-detail">
		<p style="color: red;" align="center">Pemesanan hanya dapat dilakukan satu kali.</p>
	</div>
</div>
<br>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('bootstrap/');?>js/bootstrap.min.js"></script>

   <script type="text/javascript">
   	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
	}, 1500);
   </script>