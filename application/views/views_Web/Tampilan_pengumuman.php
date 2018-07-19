<?php  ?>
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
					<div class="col-sm-12 border mouseup margin">
					<h1 align="center"><?php echo $dataPengumuman->Judul; ?></h1><br><br>
						<p align="center"><?php echo $dataPengumuman->Content; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>