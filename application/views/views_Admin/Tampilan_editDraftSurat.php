<?php  ?>
<head>
	<?php include "head_Admin.php"; ?>
</head>
<body class="padTop53 " >
	<?php include "headerNav_Admin.php"; ?>
	<div id="content" style="width: 80%;">
		<div class="panel-body">
			<div class="login-form">
				<form action="<?php echo site_url('c_admin/editStatus/'.$dataDraftSurat->ID);?>" method="post">
					<table cellpadding="10px;">
						<tr>
							<td>ID Surat</td>
							<td> : </td>
							<td>
								<?php echo $dataDraftSurat->ID; ?>
							</td>
						</tr>
						<tr>
							<td>Judul</td>
							<td> : </td>
							<td>
								<?php echo $dataDraftSurat->Nama; ?>
							</td>
						</tr>
						<tr>
							<td>Jenis Surat</td>
							<td> : </td>
							<td> 
								<?php echo $dataDraftSurat->Jenis; ?> 
							</td>
						</tr>
						<tr>
							<td>Nama Pengaju</td>
							<td> : </td>
							<td> 
								<?php echo $dataPenduduk->Nama; ?> 
							</td>
						</tr>
						<tr>
							<td>NIK Pengaju</td>
							<td> : </td>
							<td> 
								<?php echo $dataPenduduk->NIK; ?> 
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td> : </td>
							<td> 
								<?php echo $dataDraftSurat->Content; ?>
							</td>
						</tr>
						<tr>
							<td>Rubah Status</td>
							<td> : </td>
							<td> 
							<input type="radio" name="status" value="1" <?php if ($dataDraftSurat->Status_ACC == 1) {
									echo "checked";
								} ?>/>Sedang Dikerjakan
								<input type="radio" name="status" value="2" <?php if ($dataDraftSurat->Status_ACC == 2) {
									echo "checked";
								} ?>/>Selesai<br/>
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
	<?php include "footer_Admin.php"; ?>
</body>