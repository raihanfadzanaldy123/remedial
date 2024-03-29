<?php
    session_start();
    if (isset($_SESSION['log'])) {
    if (isset($_POST['send'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $tgl = $_POST['tgl'];
        $jml = $_POST['jml'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Data Produk</title>
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="logout.php"><font color="white">Logout</font></a>
        </nav>  
    </header>

    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header">Data Barang</div>
                         <div class="card-body">
                            <?php
                                for ($i=0; $i < $jml; $i++) {  
                            ?>
                            <div class="card">
                            <div class="card-body">
                            
                             <form action="output.php" method="post">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="nmbr[]" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input type="text" name="kd[]" class="form-control" id="">
                                </div>
                                
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <select class="custom-select custom-select-md mb-3" name="jenis[]">
                                            <option value="Elektronik" selected>Elektronik</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Otomotif">Otomotif</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Satuan</label>
                                    <input type="number" name="hrg[]" class="form-control" id=""><br>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" name="jmlbr[]" class="form-control" id=""><br>
                                </div></div></div><br>
                                <?php } ?> 
                                    
                                <div class="form-group">
                                    <input type="submit" value="Simpan" name ="send" class=" btn btn-info btn-block">
                                </div>
                                <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                                <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                                <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                                <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                                <input type="hidden" name="jml" value="<?php echo $jml; ?>">
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
    <?php }else {
        header("location:logon.php");
    }
    
    ?>