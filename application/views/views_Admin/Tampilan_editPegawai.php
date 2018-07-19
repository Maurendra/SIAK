<?php  ?>
<?php
$NIP="";
$NIPnew="";
$Nama="";
$Jabatan="";
$No_Telp="";
if ($jenis == "Edit") {
	$NIP = $dataPegawai->NIP;
 	$NIPnew = $dataPegawai->NIP;
 	$Nama = $dataPegawai->Nama;
 	$Jabatan = $dataPegawai->Jabatan;
 	$No_Telp = $dataPegawai->No_Telp;
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
					echo site_url('c_admin/editPegawai');
				}else{
					echo site_url('c_admin/addPegawai');
					} ;?>" method="post">
					<?php if($jenis == 'Edit') {
						echo "<h3>Edit Data Pegawai</h3>";
					}else {
						echo "<h3>Add Data Pegawai</h3>";
					}?>
						<table cellpadding="10px;">
							<tr>
								<td>NIP</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="NIP" name="nipnew" value="<?php echo $NIPnew ; ?>" autofocus required>
										<input name="nip" value="<?php echo $NIPnew ; ?>" type="hidden">
									</div>
								</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="Nama" name="nama" value="<?php echo $Nama ; ?>" autofocus required>
									</div>
								</td>
							</tr>
							<tr>
								<td>Jabatan</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="Jabatan" name="jabatan" value="<?php echo $Jabatan ; ?>" autofocus required>
									</div>
								</td>
							</tr>
							<tr>
								<td>Nomer Telepon</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="Telepon" name="no_telp" value="<?php echo $No_Telp ; ?>" autofocus required>
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
