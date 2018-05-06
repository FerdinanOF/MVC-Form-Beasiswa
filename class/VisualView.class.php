<?php

class VisualView {

    public function form() {
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Formulir Beasiswa</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/TUGAS MVC/class/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
      <div class="card ">
          <div class="card-header text-center">
            <h1 style="color: grey;">BEASISWA FILKOM UNIVERSITAS BRAWIJAYA</h1>
          </div>
          <div class="card-body">
          <div style="background: url('http://localhost/TUGAS MVC/class/biru.jpg') no-repeat fixed; background-size: 2000px;"  class="container">
            <div style="margin-top: 50px;" class="row">
            <div class="col-lg-11">
                <form action="getFormHasil" method="post" enctype="multipart/form-data" >

                    <div >
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="datanama" required="">
                    </div>
                    <div style="margin-top: 15px">
                        <label>NIM</label>
                        <input type="number" class="form-control" name="datanim" required="">
                    </div>
                    <div style="margin-top: 15px">
                        <label>IPK terakhir</label>
                        <input type="double" class="form-control" name="dataipk" required="">
                    </div>

                    <p>Jenis Kelamin : </p>
                    <div style="margin-top: -10px;" class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" class="custom-control-input" name="jenis" value="Laki-laki" checked="">
                        <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                    </div>
                    <div style="margin-bottom: 20px;" class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" class="custom-control-input" name="jenis" value="Perempuan">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label>Alamat Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="dataemail" required="">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <p style="margin-bottom: 5px;">Sertifikat yang dimiliki :</p>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="sertifikat[1]" class="custom-control-input" id="customCheck1" value="Juara Lomba">
                        <label class="custom-control-label" for="customCheck1">Juara Lomba</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="sertifikat[2]" class="custom-control-input" id="customCheck2"  value="Kepengurusan Organisasi">
                        <label class="custom-control-label" for="customCheck2">Kepengurusan Organisasi</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="sertifikat[3]" class="custom-control-input" id="customCheck3"  value="Kepanitiaan">
                        <label class="custom-control-label" for="customCheck3">Kepanitiaan</label>
                    </div>

                    <p style="margin-bottom: 25px;"></p>
                    <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="customFile" required="">
                        <label class="custom-file-label">Masukkan pas foto</label>
                    </div>

                    <p style="margin-bottom: 20px;"></p>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kontribusi yang anda lakukan kepada filkom apabila mendapatkan beasiswa</label>
                            <textarea name="kontribusi" class="form-control" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                    </div>

                        <center>
                          <button type="submit" class="btn btn-secondary btn-lg" name="kirim">Submit
                          </button></a>
                        </center>
                </form>
            </div>
            </div>
          </div>
          </div>
              <div class="card-footer text-muted">
                <img src="http://localhost/TUGAS MVC/class/filkom.png" width="120"> 
              </div>
</div>
</body>
</html>
    <?php
    }
    

    
    public function formHasil($data, $random){
    ?>
    <!doctype html public> 
    <html> 
    <head> 
           <title>Data Beasiswa</title> 
           <link rel="stylesheet" type="text/css" href="http://localhost/TUGAS MVC/class/bootstrap.min.css">
           <script type="text/javascript" src="bootstrap.min.js"></script>
           <style type="text/css">
            #kiri
            {
            width:20%;
            float:left;
            }
        </style>
    </head> 
    <body>      
        <div class="card ">
          <div class="card-header text-center">
            <h1 style="color: grey;">BEASISWA FILKOM UNIVERSITAS BRAWIJAYA</h1>
          </div>
          <div class="card-body">

        <div style="background: url('http://localhost/TUGAS MVC/class/biru.jpg') no-repeat fixed; background-size: 2000px;" class="container">
                <div style="margin-top: 50px;" class="row">
                    <div class="col-lg-12">
                        <table>
                            <tr>
                                <p align="t"><i><b>Data anda telah dikirim...</b></i></p>
                            </tr>
                        </table>            
                        <div id="kiri">
                            <img width="70%" src='http://localhost/TUGAS MVC/<?php echo $data['foto']?>' >
                        </div>
                        <table style="margin-left: 100px;">
                            <tr>
                                <td style="width: 150px;">Nama</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['datanama']; ?></td>
                            </tr>
                            <tr style="height: 50px;">
                                <td style="width: 150px;">NIM</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['datanim'];?></td>
                            </tr>
                            <tr style="height: 50px">
                                <td style="width: 150px;">IPK</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['dataipk'];?></td>
                            </tr>
                            <tr style="height: 50px;">                              
                                <td style="width: 150px;">Jenis Kelamin</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['jenis'];?></td>
                            </tr>
                            <tr style="height: 50px;">                              
                                <td style="width: 150px;">Alamat Email</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['dataemail'];?></td>
                            </tr>
                            <tr style="height: 50px;">
                                <td style="width: 150px;">Sertifikat</td>
                                <td style="width: 70px;">:</td>
                                <td>
                                    <?php                                       
                                        if(!isset($data['sertifikat'])){
                                            echo"Tidak ada sertifikat";
                                        }
                                        else{
                                        foreach ($data['sertifikat'] as $value) {
                                        echo "($value) ";
                                        }
                                    }   
                                    ?>
                                </td>
                            </tr>
                            <tr style="height: 50px;">                              
                                <td style="width: 150px;">Prodi</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $random?></td>
                            </tr>
                            </tr>
                            <tr style="vertical-align: top;">                               
                                <td style="width: 150px;">Deskripsi</td>
                                <td style="width: 70px;">:</td>
                                <td><?php echo $data['kontribusi']?></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <br>
                                <p><i><b>Pengumuman lebih lanjut akan kami beritahukan melalui email</b></i></p>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
          </div>
          
        </div> 
        <div class="card-footer text-muted">
                <img src="http://localhost/TUGAS MVC/class/filkom.png" width="120"> 
        </div>
    </body> 
    </html>
    <?php
    }
    
    
}
?>