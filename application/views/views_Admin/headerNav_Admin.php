<?php  ?>
<div id="top">
	<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px; background-image: url('<?php echo base_url('foto/header2.jpg');?>'); background-size:100em 5em; background-repeat: no-repeat;">
		<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
			<i class="icon-align-justify"></i>
		</a>
		<header class="navbar-header">
			<a href="<?php echo base_url(); ?>" class="navbar-brand">
				<img src="<?php echo base_url('foto/logo.png');?>" alt="" width="30px"/>
			</a>
		</header>
		<ul class="nav navbar-top-links navbar-right">
			<li class="dropdown" >
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #12F72D;">
					<i class="icon-user " style="color: #060606;"></i>&nbsp; <i class="icon-chevron-down" style="color: #060606;"></i>
				</a>

				<ul class="dropdown-menu dropdown-user" >
					<li><a href="<?php echo site_url('c_admin/showEdit');?>" ><i class="icon-user" ></i> Edit User Profile </a>
					</li>
					<li class="divider"></li>
					<li><a href="<?php echo site_url('c_web/logout');?>"><i class="icon-signout"></i> Logout </a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
<div class="container" style="margin:0;">
	<div id="left" >
		<div class="media user-media well-small">
			<a class="user-link" href="<?php echo site_url('c_admin');?>">
				<img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url('foto_user_admin/' .$dataAdmin->foto_profil);?>" width="50px" />
			</a>
			<br />
			<div class="media-body">
				<h5 class="media-heading"> <?php echo $dataAdmin->Nama; ?></h5>
			</div>
			<br />
		</div>

		<ul id="menu" class="collapse" >
			<li class="panel <?php if ($jenisKlik == 'profil') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin');?>" >
					<i class="glyphicon glyphicon-user"></i> Profil
				</a>
			</li>
			<li class="panel <?php if ($jenisKlik == 'penduduk') {
				echo "active";
			} ?>" >
			<a href="<?php echo site_url('c_admin/showPenduduk');?>" >
					<i class="glyphicon glyphicon-th-list"> </i>Manage Penduduk
				</a>
			</li>
			<li class="panel <?php if ($jenisKlik == 'pegawai') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin/showPegawai');?>" >
					<i class="icon-pencil"></i> Manage Pegawai
				</a>
			</li>
			<li class="panel <?php if ($jenisKlik == 'pengumuman') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin/showPengumuman');?>">
					<i class="icon-table"></i> Manage Pengumuman
				</a>
			</li>
			<li class="panel <?php if ($jenisKlik == 'draft') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin/showDraft');?>" >
					<i class="glyphicon glyphicon-envelope"></i> Draft Pengajuan
				</a>
			</li>

			<li class="panel <?php if ($jenisKlik == 'history') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin/showHistory');?>" >
					<i class="glyphicon glyphicon-envelope"></i> History Pengajuan
				</a>
			</li>
			<li class="panel <?php if ($jenisKlik == 'buat') {
				echo "active";
			} ?>">
				<a href="<?php echo site_url('c_admin/showAddFixSurat');?>">
					<i class="glyphicon glyphicon-pencil"></i> Buat Surat
				</a>
			</li>
		</ul>
	</div>
