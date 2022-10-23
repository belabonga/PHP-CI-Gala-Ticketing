<div class="registration-form">
	<div class="container">
		<h2>Order Confirmation</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">

				<?php foreach ($sh as $hehe){
					$nama = $hehe->nama_siswa;
					$jumlah = $hehe->harga_tiket;
					$nobook = $hehe->id_booking;					
					$rek = $hehe->payment;
					?>
					<form action="<?php echo base_url('index.php/booking/checkout/'.$nobook);?>" method="POST" enctype="multipart/form-data">

							 <span class="text-info">Nomor Booking: </span>
							 <span><input type="text" name="nobook" value="<?php echo $nobook;?>" readonly></span>
						 
							 <span class="text-info">Nama Lengkap: </span>
							 <span> <input type="text" name="fullname" value="<?php echo $nama;?>" readonly></span>
				
							 <span class="text-info">Jumlah Transfer: </span>
							 <span><input type="text" name="trans" value="<?php echo $jumlah;?>" readonly></span>

							 <span class="text-info">Nomor Rekening Tujuan: </span>
							 <span><input type="text" name="tujuan" value="<?php echo $rek;?>" readonly></span>

							 <span class="text-info">Nomor Rekening: </span>
							 <span><input type="text" name="rek" ></span>

							 <span class="text-info">Bukti Pembayaran: </span>
							 <span><input type="file" name="berkas" ></span>

						 </ul><br>
						<span> <input type="submit" name="submit" value="Submit"></span>
					 </form>
			   </div>	
			  <?php } ?>
			 </div>
			  <div class="clearfix"> </div>
		   </div>
