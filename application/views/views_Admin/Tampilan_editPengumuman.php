<?php  ?>
<?php
$IDnew="";
$Judul="";
$Content="";
if ($jenis == "Edit") {
 	$IDnew = $dataPengumuman->ID;
 	$Judul = $dataPengumuman->Judul;
 	$Content = $dataPengumuman->Content;
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
					echo site_url('c_admin/editPengumuman');
				}else{
					echo site_url('c_admin/addPengumuman');
					} ;?>" method="post">
          <?php if($jenis == 'Edit') {
  					echo "<h3>Edit Data Pengumuman</h3>";
  				}else {
  					echo "<h3>Add Data Pengumuman</h3>";
  				}?>
						<table cellpadding="10px;">
							<tr>
								<td>ID</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="ID" name="idnew" value="<?php echo $IDnew ; ?>" autofocus required>
										<input name="id" value="<?php echo $IDnew ; ?>" type="hidden">
									</div>
								</td>
							</tr>
							<tr>
								<td>Judul</td>
								<td> : </td>
								<td>
									<div class="form-group">
										<input class="form-control" placeholder="Judul" name="judul" value="<?php echo $Judul ; ?>" autofocus required>
									</div>
								</td>
							</tr>
							<tr>
								<td>Content</td>
								<td> : </td>
								<td>
									<div class="form-group">
									<textarea required cols="40" rows="10" class="form-control" placeholder="Content" name="content" autofocus required><?php echo $Content ; ?></textarea>
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
