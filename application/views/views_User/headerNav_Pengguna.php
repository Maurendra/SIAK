<?php  ?>
<header style="height: 32%;">
	<div class="col-md-12 header">
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url('foto/logo.png');?>" alt="logo" ></a>
			</div>

			<div class="col-sm-5">

			</div>
			<marquee bgcolor="green" style="font-family: impact; font-size:24px; color:#FFFF00;"> *** SELAMAT DATANG <?php echo $dataAkun->Email; ?> ***</marquee>
		</div>

	</div>
</div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark" id="sideNav" style="background-color: #257708">
	<a class="navbar-brand js-scroll-trigger" href="#page-top">
		<span class="d-none d-lg-block">
			<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url('foto_user_admin/'.$dataUser->foto_profil);?>" alt="">
		</span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item <?php if ($active == 'about') {
				echo 'active';
			} ?>">
			<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_user');?>">About</a>
			</li>
			<li class="nav-item <?php if ($active == 'ajukan') {
				echo 'active';
			} ?>">
				<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_user/showAjukan');?>">Ajukan Surat</a>
			</li>
			<li class="nav-item <?php if ($active == 'edit') {
				echo 'active';
			} ?>">
				<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_user/showEdit');?>">Edit Data Diri</a>
			</li>
			<li class="nav-item <?php if ($active == 'draft') {
				echo 'active';
			} ?>">
				<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_user/showDraft');?>">Draft Pengajuan</a>
			</li>
			<li class="nav-item <?php if ($active == 'history') {
				echo 'active';
			} ?>">
				<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_user/showHistory');?>">History Pengajuan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="<?php echo site_url('c_web/logout');?>">Logout</a>
			</li>
		</ul>
	</div>
</nav>