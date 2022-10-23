<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="<?php echo base_url('bootstrap/');?>css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/');?>inistyle.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>


		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h3>Sign up once for only alumni</h3>
					<form class="" method="post" action="<?php echo base_url('login/register_do');?>">
						<?php
						$notif = $this->session->flashdata('notif');
						if (!empty($notif)) {
							echo $notif;
						}
						?>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nama_siswa" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email_siswa" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="passconf" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="angkatan" class="cols-sm-2 control-label">Angkatan ke-</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mortar-board fa" aria-hidden="true"></i></span>
									<select class="form-control" id="angkatan" name="angkatan">
									    <option value="01">01</option>
									    <option value="02">02</option>
									    <option value="03">03</option>
									    <option value="04">04</option>
									    <option value="05">05</option>
									    <option value="06">06</option>
									    <option value="07">07</option>
									    <option value="08">08</option>
									    <option value="09">09</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									    <option value="13">13</option>
									    <option value="14">14</option>
									    <option value="15">15</option>
									    <option value="16">16</option>
									    <option value="17">17</option>
									    <option value="18">18</option>
									    <option value="19">19</option>
									    <option value="20">20</option>
									    <option value="21">21</option>
									    <option value="22">22</option>
									    <option value="23">23</option>
									    <option value="24">24</option>
									    <option value="25">25</option>
									  </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="kelas" class="cols-sm-2 control-label">Kelas</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-university fa" aria-hidden="true"></i></span>
									  <select class="form-control" id="kelas" name="kelas">
									    <option value="X-RPL-01">X-RPL-01</option>
									    <option value="X-RPL-02">X-RPL-02</option>
									    <option value="X-RPL-03">X-RPL-03</option>
									    <option value="X-RPL-04">X-RPL-04</option>
									    <option value="X-RPL-05">X-RPL-05</option>
									    <option value="X-RPL-06">X-RPL-06</option>
									    <option value="X-TKJ-01">X-TKJ-01</option>
									    <option value="X-TKJ-02">X-TKJ-02</option>
									    <option value="X-TKJ-03">X-TKJ-03</option>
									    <option value="X-TKJ-04">X-TKJ-04</option>
									    <option value="X-TKJ-05">X-TKJ-05</option>
									    <option value="XI-RPL-01">XI-RPL-01</option>
									    <option value="XI-RPL-02">XI-RPL-02</option>
									    <option value="XI-RPL-03">XI-RPL-03</option>
									    <option value="XI-RPL-04">XI-RPL-04</option>
									    <option value="XI-RPL-05">XI-RPL-05</option>
									    <option value="XI-RPL-06">XI-RPL-06</option>
									    <option value="XI-TKJ-01">XI-TKJ-01</option>
									    <option value="XI-TKJ-02">XI-TKJ-02</option>
									    <option value="XI-TKJ-03">XI-TKJ-03</option>
									    <option value="XI-TKJ-04">XI-TKJ-04</option>
									    <option value="XI-TKJ-05">XI-TKJ-05</option>
									    <option value="XII-RPL-01">XII-RPL-01</option>
									    <option value="XII-RPL-02">XII-RPL-02</option>
									    <option value="XII-RPL-03">XII-RPL-03</option>
									    <option value="XII-RPL-04">XII-RPL-04</option>
									    <option value="XII-RPL-05">XII-RPL-05</option>
									    <option value="XII-TKJ-01">XII-TKJ-01</option>
									    <option value="XII-TKJ-02">XII-TKJ-02</option>
									    <option value="XII-TKJ-03">XII-TKJ-03</option>
									    <option value="XII-TKJ-04">XII-TKJ-04</option>
									  </select>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input id="button" type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit" value="Register">
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('bootstrap/');?>js/bootstrap.min.js"></script>
	</body>
</html>