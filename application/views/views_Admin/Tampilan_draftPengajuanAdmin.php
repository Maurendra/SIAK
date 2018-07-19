<?php  ?>
<head>
	<?php include "head_Admin.php"; ?>
	<link rel="stylesheet" href="<?php echo base_url('asset/css_admin/plugins/dataTables/dataTables.bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('asset/css_admin/plugins/dataTables/jquery.dataTables.js');?>"></script>
</head>
<body class="padTop53 " >
	<div id="wrap" style="border: 2px solid black;">
		<?php include "headerNav_Admin.php"; ?>
		<div id="content" style="width: 80%; border: 2px solid black;">
			<div class="inner">
				<div class="row">
					<div class="col-lg-12">
						<h2> Draft Pengajuan </h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								DataTables Advanced Tables
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>ID</th>
												<th>Jenis</th>
												<th>Nama</th>
												<th>NIK Pengaju</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($dataDraftSurat as $key) { 
												if (($key->Status_ACC != 2) && ($key->Status_ACC != 3	)) { ?>
												<tr>
													<td><?php echo $key->ID; ?></td>
													<td><?php echo $key->Jenis; ?></td>
													<td><?php echo $key->Nama; ?></td>
													<td><?php echo $key->ID_Pengaju; ?></td>
													<td>
														<a href="<?php echo site_url('c_admin/showEditDraft/'.$key->ID);?>"><button class="btn-primary">Edit</button></a>
														<a href="<?php echo site_url('c_admin/tolakSurat/'.$key->ID);?>"><button class="btn-danger">Tolak</button></a>
													</td>
												</tr>
												<?php } ?>
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