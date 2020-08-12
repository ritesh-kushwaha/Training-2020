<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <title>Setting</title>
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
<div class="container login-signup setting">
    <h3 style="text-align: left; font-weight: bolder;">Change Password</h3>
            <form action="setting_script.php" method="POST">
                <div class="form-group">
                    <input type="password"  class="form-control"  placeholder="Old Password" name="oldPassword" required>
                </div>
                <div class="form-group">
                        <input type="password"  class="form-control"  placeholder="New Password" name="newPassword" required>
                </div>
                <div class="form-group">
                        <input type="password"  class="form-control" placeholder="Re-type New Password" name="newPasswordRe" required>
                </div>
                    <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                    <input type="submit"  href="login.php" class="btn btn-primary" value="Confirm">
                    <!-- <button href="login.php" class="btn btn-primary" name="submit">Change</button> -->
            </form>            
</div>



    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>