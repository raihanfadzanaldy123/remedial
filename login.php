<?php 
    session_start();
    if (isset($_POST['send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "angsam" && $pass == "123") {
            $_SESSION['log'] = $user;
            header("location:remed1.php");
        }
    }
    
        else {
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Log-In</title>
</head>
<body>
    <header>
                 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
        </nav> 

    </header>
        <div class="row">
            <div class="col-md-4">
                <div class="card"><br>
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="pass" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Log-in" name="send" class="btn btn-success">
                        </div>
                    </form>
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

     if (isset($_SESSION['log'])) {
        header("location:remed1.php");
    }

?>