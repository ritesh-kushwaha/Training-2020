<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <title>Lifestyles Store</title>
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
    
    <div class="container login-signup">
            <h3 style="text-align: left; font-weight: bolder;">Sign up</h3>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                           <input id="name" class="form-control" placeholder="Name" name="name"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required> 
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                 <input id="pwd" type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>     
                            </div>
                            <div class="form-group">
                                <input id="contact" type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control" id="city" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control" id="address" name="address"  placeholder="Address">
                            </div>
                            <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                    </form>
     </div>




    <?php
      include 'includes/footer.php';
    ?>

    
      </body>
    </html>  