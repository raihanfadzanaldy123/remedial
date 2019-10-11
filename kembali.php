<?php 
session_start();
    if (isset($_SESSION['log'])) {
    if (isset($_POST['tbyr'])) {
        $total = $_POST['total'];
        $byr = $_POST['byr'];
        
        $kembali = $byr-$total; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Kembalian</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="logout.php"><font color="white">Logout</font></a>
        </nav>  
    </header><br><br>
    <div class="container align-items-center">
        <div class=" bg-info">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>Data Berhasil Di Input!!</h2></center></div>
                Uang Anda : Rp. <?php echo $byr; ?><br>
                Total Bayar : Rp. <?php echo $total; ?><br>
                Kembalian Uang : Rp. <?php echo $kembali; ?><br>
                Apakah Anda Ingin Memasukan Data Lagi ?
                <div class="card-footer"><center>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="submit" value="Ya" name="y" class="btn btn-primary">
                        <input type="submit" value="Tidak" name="t" class="btn btn-danger">
                    </div>
                    
                </form>
                </center></div>
                <?php 
                    if (isset($_POST['y'])) {
                        header("location:remed1.php");
                    } elseif (isset($_POST['t'])) {
                        echo "Terima Kasih";
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
    <?php }else {
        header("location:login.php");
    }
    
    ?>