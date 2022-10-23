<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="<?php echo base_url('bootstrap/');?>css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>

	<!--HOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHO-->
	
	<div ui-view="" class="clearfix account-wrap ng-scope">
	<section id="login-wrap" class="col-md-4 col-md-offset-4 portal-form-wrap ng-scope">
		  <div style="display:flex;justify-content:center;align-items:center;">
		    <div style="width:200px; height:200px;">
  			 <img id="bear" src="<?php echo base_url('assets/images/mascot_login.png');?>">
  		</div>
  		</div>
  <div id="portal" class="portal" ng-controller="PortalController">
  <!-- ngIf: notice -->
  <form id="portalForm" name="portalForm" class="portalForm ng-pristine ng-valid-email ng-invalid ng-invalid-required" novalidate="" style="">
    <!-- ngIf: !contained --><div ng-if="!contained" class="ng-scope">
      <!-- ngIf: signupState -->
      <!-- ngIf: !signupState --><div ng-if="!signupState" class="ng-scope">
        <h1 class="h4" ng-show="!appVersion">Log in here :)</h1>
      </div><!-- end ngIf: !signupState -->
    </div><!-- end ngIf: !contained -->
    <!-- ngIf: contained -->
    </form>

    <form class="" method="post" action="<?php echo base_url('login/login_do');?>">
		<?php
			$notif = $this->session->flashdata('notif');
			if (!empty($notif)) 
			{
				echo $notif;
			}
		?>

 		<div class="fields">
      		<div class="form-group error-parent">
        		<!-- ngIf: portalError.email -->
        		<input type="email" placeholder="Email" required="" ng-model="user.email" class="ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required" name="email_siswa" id="email">
      		</div>


   			<div class="form-group">
        		<!-- ngIf: portalError.password -->
        		<input type="password" placeholder="Password" required="" ng-model="user.password" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" style="" name="password" id="password">
      		</div>


      			<!-- ngIf: portalError.generalError -->
      		<div class="submit-group">
				<input id="button" type="submit" class="btn btn-lg" name="submit" value="Login">
			</div>
    </form>


    
    		<div class="note state-toggle">
      			<!-- ngIf: signupState -->
      			<!-- ngIf: !signupState -->
      			<p ng-if="!signupState" class="ng-scope">
        			I don't have a 
        				<a ng-click="toggleSignup()" href="<?php echo base_url('home/register'); ?>">Galasesa account.</a>
      			</p><!-- end ngIf: !signupState -->
    		</div>
</section>
</div>
<!--HOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHOHO-->

		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('bootstrap/');?>js/bootstrap.min.js"></script>
	</body>
</html>