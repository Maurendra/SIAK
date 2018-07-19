<?php  ?>
<?php
$NIK="";
$NIKnew="";
$Nama="";
$TTL="";
$Jns_Kelamin="";
$Alamat="";
$Agama="";
$Status="";
$Pekerjaan="";
$Foto="";
if ($jenis == "Edit") {
	$NIK = $dataPenduduk->NIK;
	$NIKnew = $dataPenduduk->NIK;
	$Nama = $dataPenduduk->Nama;
	$TTL = $dataPenduduk->TTL;
	$Jns_Kelamin = $dataPenduduk->Jenis_Kelamin;
	$Alamat = $dataPenduduk->Alamat;
	$Agama = $dataPenduduk->Agama;
	$Status = $dataPenduduk->Status;
	$Pekerjaan = $dataPenduduk->Pekerjaan;
	$Foto = $dataPenduduk->foto_profil;
};
?>
<head>
	<?php include "head_Admin.php"; ?>
</head>
<body class="padTop53 " >
	<?php include "headerNav_Admin.php"; ?>
	<div id="content" style="width: 80%;">
		<div class="panel-body">
			<div class="login-form">
				<form action="<?php if ($jenis == 'Edit') {
					echo site_url('c_admin/editPenduduk');
				}else{
					echo site_url('c_admin/addPenduduk');
				} ;?>" method="post">
				<?php if($jenis == 'Edit') {
					echo "<h3>Edit Data Penduduk</h3>";
				}else {
					echo "<h3>Add Data Penduduk</h3>";
				}?>

					<table cellpadding="10px;">
						<tr>
							<td>NIK</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="NIK" name="nik" value="<?php echo $NIK ; ?>" <?php if ($jenis == "Edit") {
										echo "disabled";
									} ?> autofocus required>
									<input name="niknew" value="<?php echo $NIKnew ; ?>" type="hidden">
								</div>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control"  required placeholder="Nama" name="nama" value="<?php echo $Nama ; ?>" autofocus>
								</div>
							</td>
						</tr>
						<tr>
							<td>Tempat Tanggal Lahir</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Tempat Tanggal Lahir" name="ttl" value="<?php echo $TTL ; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td> : </td>
							<td>
								<input type="radio" name="jns_klm" value="Laki - Laki" <?php if ($Jns_Kelamin == "Laki - Laki") {
									echo "checked";
								} ?>/>Laki-laki
								<input type="radio" name="jns_klm" value="Perempuan" <?php if ($Jns_Kelamin == "Perempuan") {
									echo "checked";
								} ?>/>Perempuan<br/>
							</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $Alamat ; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Agama" name="agama" value="<?php echo $Agama ; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Status</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Status" name="status" value="<?php echo $Status ; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $Pekerjaan ; ?>" autofocus required>
								</div>
							</td>
						</tr>

							<tr>
								<td><button class="btn btn-primary" name="Aksi" >Simpan</button></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<?php include "footer_Admin.php"; ?>
	</body>
