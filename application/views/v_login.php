<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang</title>
	<link type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?= base_url()?>assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?= base_url()?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				
			  	<a class="brand" href="utama">
			  		Sistem Informasi Tagihan Listrik
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<!-- <li><a href="other-daftar.html">
							Daftar
						</a></li> -->

					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				<?=form_open('login/cek_login','class="form-inline"')?>	
					<form class="form-vertical">
						<div class="module-head">
							<h3>Masuk</h3>
						</div>
						<?	if (isset($gagal))
		{	echo ("	<div class='alert alert-error'>
					<strong>".$gagal."</strong>			 
					</div>
				");	
			unset($gagal);
		}  	 
	?>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="userid" name="userid" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="login" class="btn btn-primary pull-right" >Masuk</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
						</form>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; Aghna Fikrunafuddin </b> All rights reserved.
		</div>
	</div>
	<script src="<?= base_url()?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>