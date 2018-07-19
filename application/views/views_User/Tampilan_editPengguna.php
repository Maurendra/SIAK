<?php  ?>
<html>
<head>
	<?php include "css_Pengguna.php"; ?>
	<title>Tampilan Profil Pengguna</title>
</head>
<body>
	<?php include "headerNav_Pengguna.php"; ?>
	<div class="content" >
		<div class="container-fluid" >
			<div class="row" >
				<div class="col-sm-2">
				</div>
				<div class="col-sm-8 border background-white radius margin" style=" width: 100%;" id="profil">
					<div class="login-form contact-form-area">
						<form action="<?php echo site_url('c_user/editUser');?>" method="post">
							<h3>Edit Data Diri</h1>
								<table cellpadding="10px;">
									<tr>
										<td>NIK</td>
										<td> : </td>
										<td> <?php echo $dataAkun->NIK; ?> </td>
									</tr>
									<tr>
										<td>Username</td>
										<td> : </td>
										<td>
											<div class="form-group">
												<input class="form-control" placeholder="Username" name="username" value="<?php echo $dataAkun->Email ?>" autofocus required>
											</div>
										</td>
									</tr>
									<tr>
										<td>Password</td>
										<td> : </td>
										<td>
											<div class="form-group">
												<input class="form-control" placeholder="Password" name="password" value="<?php echo $dataAkun->Password ?>" autofocus required>
											</div>
										</td>
									</tr>
									<tr>
										<td><button class="btn btn-primary contact-btn" name="Aksi" >Simpan</button></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
