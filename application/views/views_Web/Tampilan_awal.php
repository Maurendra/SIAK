<?php  ?>
<html>
<head>
</head>
<body>
	<div id="header">
		<?php include "bg_header.php"; ?>
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8 border background-white radius">
					<?php foreach ($rowPengumuman as $key) { ?>
					<a href="<?php echo site_url('c_web/showDetailPengumuman/'.$key->ID);?>">
						<div class="col-sm-12 border mouseup margin">
							<h2><?php echo $key->Judul; ?></h2>
							<p><?php echo $key->Content; ?></p>
						</div>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>