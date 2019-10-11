<?php 
session_start();
    if (isset($_SESSION['log'])) {
        # code...
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="logout.php"><font color="white">Logout</font></a>
        </nav>  
    </header>
<br><br><br><br>
    <div class="container align-items-center">
        <div class=" bg-info">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>Selamat Datang Di Toko Kami</h2></center></div>
                <div class="card-footer"><center>Kami Tidak Pernah Meragukan Pelanggan Meskipun Permintaannya Aneh-Aneh</center></div>
            </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
    <?php } else {
        header("location:logon.php");
    }
    
    ?>