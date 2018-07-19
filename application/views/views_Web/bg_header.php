<?php  ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css');?>">

	<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/jquery.min.js');?>"></script>
	<title>Tampilan Awal</title>
	<style>
		<?php include "style2.css";?>
	</style> 
</head>
<body>
	<div class="container-fluid header">
		<div class="row">

			<div class="col-md-2">
				<a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url('foto/logo.png');?>" alt="logo" ></a>
			</div>

			<div class="col-md-10 text-right" >
				<?php if ($this->session->userdata('status') == "loginUser" || $this->session->userdata('status') == "loginAdmin") {?>
				<a href="<?php if ($this->session->userdata('status') == 'loginUser') {
					echo site_url('c_user');
				}else {
					echo site_url('c_admin');
					} ?>" style=" text-decoration: none; " >
					<button type="button" class="btn btn-light">Profil</button>
				</a>				
				<a href="<?php echo site_url('c_web/logout');?>" style=" text-decoration: none; " >
					<button type="button" class="btn btn-light">Logout</button>
				</a>
				<?php } else{?>
				
				<a href="<?php echo site_url('c_web/showRegis');?>" style=" text-decoration: none; " >
					<button type="button" class="btn btn-light">Registrasi</button>
				</a>
				<a href="<?php echo site_url('c_web/showLogin/' .'Login User');?>" style=" text-decoration: none; " >
					<button type="button" class="btn btn-light">Login User</button>
				</a>
				<a href="<?php echo site_url('c_web/showLogin/' .'Login Admin');?>" style=" text-decoration: none; " >
					<button type="button" class="btn btn-light">Login Admin</button>
				</a>

				<?php } ?>

			</div>
			
		</div>
		<marquee bgcolor="green" style="font-family: impact; font-size:24px; color:#FFFF00;"> *** SELAMAT DATANG DI WEBSITE KELURAHAN KAMI ***</marquee>
	</div>

</body>
</html>

	