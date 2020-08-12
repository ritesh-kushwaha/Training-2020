<?php
    require 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <title>Login</title>
    <!--Styles-->
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php
   include 'includes/header.php';
?>    
    <div class="container login-signup login">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 style="text-align: left; font-weight: bolder;">Login</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning" style="text-align: left;">Login to make a purchases</p>
                        <form action="login_script.php" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                            </div>

                            <div class="form-group">
                                <?php
                                   if(isset($_GET['m1'])){
                                   echo $_GET['m1'];
                                   }
                              ?>
                              </div>
                            <button class="btn btn-primary">Login</button>
                        </form>
                        
                    </div>
                    <div class="panel-footer">Don't have an account ? <a href="signup.php">Register</a></div>
                </div>
            </div>



<?php
    include 'includes/footer.php';
?>
      </body>
    </html>  