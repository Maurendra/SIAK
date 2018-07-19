<?php  ?>
<?php include "head_Admin.php"; ?>
<body class="padTop53 " >
	<?php include "headerNav_Admin.php"; ?>
	<div id="content" style="width: 80%;">
		<div class="panel-body">
			<div class="login-form">
				<form action="<?php echo site_url('c_admin/editAdmin');;?>" method="post">
				<h3>Edit Data Admin</h1>
					<table cellpadding="10px;">
						<tr>
							<td>ID</td>
							<td> : </td>
							<td> <p><?php echo $dataAdmin->ID; ?></p>
							</td>
						</tr>
						<tr>
							<td>Username</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="nama" value="<?php echo $dataAdmin->Nama; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td> : </td>
							<td>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" value="<?php echo $dataAdmin->Password; ?>" autofocus required>
								</div>
							</td>
						</tr>
						<tr>
							<td><button class="btn btn-primary" name="Aksi" >Simpan</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php include "footer_Admin.php"; ?>
</body>
