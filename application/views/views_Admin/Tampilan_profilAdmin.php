<?php  ?>
<?php include "head_Admin.php"; ?>
<body class="padTop53 " >
	<?php include "headerNav_Admin.php"; ?>
	<div id="content" style="width: 80%;">
		<div class="panel-body">
			<div class="login-form">
				<h1 align="center">Admin ID <?php echo $dataAdmin->ID; ?></h1>
				<h3 align="center"><?php echo $dataAdmin->Nama; ?></h3>
				</div>
			</div>
		</div>
		<?php include "footer_Admin.php" ?>
	</body>