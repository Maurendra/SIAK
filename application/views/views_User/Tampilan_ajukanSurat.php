<?php  ?>
<head>
	<?php include "css_Pengguna.php"; ?>
	<title>Tampilan Ajukan Surat</title>
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
						<form action="<?php echo site_url('c_user/ajukanSurat');?>" method="post">
							<table cellpadding="10px;">
								<tr>
									<td>Judul</td>
									<td> : </td>
									<td>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="judul" value="" autofocus required>
										</div>
									</td>
								</tr>
								<tr>
									<td>Jenis Surat</td>
									<td> : </td>
									<td>
										<div class="form-group">
											<select name="jenis" id="" required>
												<option value="kk" selected="selected">Kartu Keluarga</option>
												<option value="ktp" >KTP</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>Content</td>
									<td> : </td>
									<td>
										<div class="form-group">
											<textarea cols="40" rows="10" class="form-control" placeholder="Content" name="content" autofocus required></textarea>
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
