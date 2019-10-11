<?php
session_start();
if (isset($_SESSION['log'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Data Diri</title>
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="logout.php" align="right"><font color="white">Logout</font></a>
        </nav>  
    </header>

    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header" align="center" >Data Diri</div>
                         <div class="card-body">
                             <form action="remed2.php" method="post">
                                 <div class="form-group">
                                      <label for="">Nama</label>
                                         <input type="text" name="nama" class="form-control" id="">
                                 </div>
                                      <div class="form-group">
                                         <label>Alamat</label>
                                         <textarea name="alamat" class="form-control" rows="5"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label>Jenis Kelamin</label>&nbsp; &nbsp;
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jk" value="Laki-laki" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-check form-check-inline custom-radio">
                                            <input class="custom-control-input" id="customRadioInline2" type="radio" name="jk"  value="Perempuan">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembelian</label>
                                        <input type="date" name="tgl" class="form-control">
                                    </div>
                                    <div class="form-group">
                                                <label for="">Jumlah Data</label>
                                                <input type="number" name="jml" class="form-control" id=""><br>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" name ="send" class=" btn btn-info btn-block">
                                  </div>
                            </form>
                      </div>
                  </div>
               </div>      
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php } 

    else {
    header("location:login.php");
} 
?>