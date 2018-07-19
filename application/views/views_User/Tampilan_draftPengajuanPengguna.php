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
					Daftar Surat yang sedang diajukan
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Jenis Surat</th>
									<th>Judul Surat</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($dataSuratPengguna as $key) { ?>
								<tr>
									<td><?php echo $key->Jenis; ?></td>
									<td><?php echo $key->Nama; ?></td>
									<td>
										<?php if ($key->Status_ACC == 0) {
											echo "Belum Dikerjakan";
										}elseif ($key->Status_ACC == 1) {
											echo "Sedang Dikerjakan";
										}elseif ($key->Status_ACC == 2) {
											echo "Telah Selesai, Silahkan diambil";
										}elseif ($key->Status_ACC == 3) {
											echo "Surat Ditolak";
										} ?>
									</td>
									<td>
										<a href="<?php echo site_url('c_user/deletePengajuan/'.$key->ID);?>"><button class="btn-primary" <?php if (($key->Status_ACC == 1) || ($key->Status_ACC == 2) || ($key->Status_ACC == 3)) {
											echo "disabled";
										} ?>>Tarik</button></a>
										<a href="<?php echo site_url('c_user/deletePengajuan/'.$key->ID);?>"><button class="btn-danger" <?php if (($key->Status_ACC == 0) || ($key->Status_ACC == 1) ) {
											echo "disabled";
										} ?>>Delete</button></a>
									</td>
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