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
						<h2> Data Pengumuman </h2>
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
											<td>
											<a href="<?php echo site_url('c_admin/showAddPengumuman');?>"><button class="btn-default">Tambah Pengumuman</button></a>
											</td>
										</tr>
											<tr>
												<th>ID</th>
												<th>Judul</th>
												<th>Content</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($dataPengumuman as $key) { ?>
											<tr>
												<td><?php echo $key->ID; ?></td>
												<td><?php echo $key->Judul; ?></td>
												<td><?php echo $key->Content; ?></td>
												<td>
												<a href="<?php echo site_url('c_admin/showEditPengumuman/'.$key->ID);?>"><button class="btn-primary">Edit</button></a>
												<a href="<?php echo site_url('c_admin/deletePengumuman/'.$key->ID);?>"><button class="btn-danger">Delete</button></a>
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