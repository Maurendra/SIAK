<?php  ?>
<head>
	<?php include "head_Admin.php"; ?>
	<link rel="stylesheet" href="<?php echo base_url('asset/css_admin/plugins/dataTables/dataTables.bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('asset/css_admin/plugins/dataTables/jquery.dataTables.js');?>"></script>
</head>
<body class="padTop53 " >
	<div id="wrap" >
		<?php include "headerNav_Admin.php"; ?>
		<div id="content" style="width: 80%;">
			<div class="inner" >
				<div class="row">
					<div class="col-lg-12">
						<h2> Data Pegawai </h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Manage It
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
										<tr>
											<td>
											<a href="<?php echo site_url('c_admin/showAddPegawai');?>"><button class="btn-default">Tambah Pegawai</button></a>
											</td>
										</tr>
											<tr>
												<th>NIP</th>
												<th>Jabatan</th>
												<th>Nama</th>
												<th>No. Telp.</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($dataPegawai as $key) { ?>
											<tr>
												<td><?php echo $key->NIP; ?></td>
												<td><?php echo $key->Jabatan; ?></td>
												<td><?php echo $key->Nama; ?></td>
												<td><?php echo $key->No_Telp; ?></td>
												<td>
												<a href="<?php echo site_url('c_admin/showEditPegawai/'.$key->NIP);?>"><button class="btn-primary">Edit</button></a>
												<a href="<?php echo site_url('c_admin/deletePegawai/'.$key->NIP);?>"><button class="btn-danger">Delete</button></a>
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
			</div>
		</div>
	</div>
	<?php include "footer_Admin.php"; ?>
</body>