<?php  ?>
<?php  ?>
<html>
<head>
	<?php include "css_Pengguna.php"; ?>
	<title>Tampilan Profil Pengguna</title>
</head>
<body>
	<?php include "headerNav_Pengguna.php"; ?>
	<div class="content" style="margin-left: 5%;">
		<div class="col-sm-2">
		</div>
		<div class="border background-white radius margin" style="margin-right: 5%;">
			<div class="panel panel-default">
				<div class="panel-heading">
					Daftar Surat yang pernah diajukan
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
								<th>Jenis Surat</th>
									<th>Judul Surat</th>
									<th>Content</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($dataSuratPengguna as $key) { ?>
								<tr>
									<td><?php echo $key->Jenis; ?></td>
									<td><?php echo $key->Nama; ?></td>
									<td><?php echo $key->Content; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>	
</body>
</html>