<?php  ?>
<html>
<head>
  <?php include "css_Pengguna.php"; ?>
  <title>Tampilan Profil Pengguna</title>
</head>
<body>
  <?php include "headerNav_Pengguna.php"; ?>
<div class="content" >
  <div class="container-fluid" >
    <div class="row" >
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8 border background-white radius margin" style=" width: 100%;" id="profil">
        <div class="container-fluid border margin" >
          <div class="my-auto" >
            <h3 class=""><?php echo $dataAkun->Email; ?>
            </h3>
            <div class="subheading mb-2"><?php echo $dataUser->Alamat; ?>
            </div>
            <table class="mb-2">
              <tr>
                <td>NIK</td>
                <td> : </td>
                <td><?php echo $dataUser->NIK; ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td> : </td>
                <td><?php echo $dataUser->Nama; ?></td>
              </tr>
              <tr>
                <td>Tempat Tanggal Lahir</td>
                <td> : </td>
                <td><?php echo $dataUser->TTL; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td><?php echo $dataUser->Jenis_Kelamin; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td> : </td>
                <td><?php echo $dataUser->Alamat; ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td> : </td>
                <td><?php echo $dataUser->Agama; ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td> : </td>
                <td><?php echo $dataUser->Status; ?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td> : </td>
                <td><?php echo $dataUser->Pekerjaan; ?></td>
              </tr>
            </table>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
