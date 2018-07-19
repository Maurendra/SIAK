<?php
$jenis = "Login Admin";
if ($jenisLogin == "Login%20User") {
	$jenis = "Login User";
}
 ?>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/style.css');?>">
	<style>
		<?php include "style2.css";?>
	</style>
</head>
<body>
<header>
	<?php include "bg_header.php"; ?>
</header>
	<body>
		<div class="login">
			<div class="login-screen">
				<div class="login-form contact-form-area">
					<form action="<?php echo site_url('c_web/login/' .$jenis);?>" method="post">
						<h1>Login</h1>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="username" autofocus required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<button class="btn btn-primary contact-btn" name="Aksi" ><?php echo $jenis ?></button>
						</fieldset>
					</form>
				</div>
			</div>
		</body>
	</body>
	</html>
