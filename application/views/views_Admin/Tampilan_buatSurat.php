<?php  ?>
<?php
$ID="";
$IDnew="";
$Nama="";
$Jenis="";
$Content="";
$ID_Pengaju="";
if ($jenis == "Edit") {
	$ID = $dataSurat->ID;
	$IDnew = $dataSurat->ID;
	$Nama = $dataSurat->Nama;
	$Jenis = $dataSurat->Jenis;
	$Content = $dataSurat->Content;
	$ID_Pengaju = $dataSurat->ID_Pengaju;
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
					echo site_url('c_admin/editFixSurat');
				}else{
					echo site_url('c_admin/addFixSurat');
				} ;?>" method="post">
				<h3>Edit Data Surat</h1>
					<table cellpadding="10px;">
						<tr>
							<td>ID Surat</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="id" value="<?php echo $ID ; ?>" <?php if ($jenis == "Edit") {
										echo "disabled";
									} ?> autofocus required>
									<input name="idnew" value="<?php echo $IDnew ; ?>" type="hidden">
								</div>
							</td>
						</tr>
						<tr>
							<td>Judul Surat</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="nama" value="<?php echo $Nama ; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jenis</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<select name="jenis" required>
										<option value="kk" selected="<?php if ($Jenis == 'kk') {
											echo "selected";
										} ?>">Kartu Keluarga</option>
										<option value="ktp <?php if ($Jenis == 'ktp') {
											echo "selected";
										} ?>" >KTP</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<textarea required cols="40" rows="10" class="form-control" placeholder="Content" name="content" value="<?php echo $Content ; ?>" autofocus required><?php echo $Content ; ?></textarea>
								</div>
							</td>
						</tr>
						<tr>
							<td>NIK Pengaju</td>
							<td> : </td>
							<td>
								<select name="id_pengaju" required>
									<?php foreach ($dataPenduduk as $key) { ?>
									<option value="<?php echo $key->NIK; ?>" selected="<?php if ($key->NIK == $ID_Pengaju) {
										echo "selected";
									} ?>"><?php echo $key->NIK; ?></option>
									<?php } ?>
								</select>
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
