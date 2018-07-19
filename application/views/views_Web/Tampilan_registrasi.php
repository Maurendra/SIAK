<?php  ?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registrasi</title>

  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/style.css');?>">
  <style>
    <?php include "style2.css";?>
  </style>
</head>
<body>
<header>
  <?php include "bg_header.php"; ?>
</header>
  <body>
    <div class="login">
      <div class="login-screen">
        <div class="login-form contact-form-area">
          <form action="<?php echo site_url('c_web/regis');?>" method="post">
            <fieldset>
            <h1>Registrasi</h1>
              <div class="form-group">
              <input class="form-control" placeholder="NIK" name="nik" autofocus required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="username" autofocus required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
              </div>
              <button class="btn btn-primary contact-btn" name="Aksi" >Registrasi</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </body>
</body>
</html>
