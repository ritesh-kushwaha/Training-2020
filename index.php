<?php
    include 'includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Welcome | Lifestyle Store</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>

<body style="padding-top: 50px;">
<div style="margin-bottom: 50px;">
        <?php
            include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <br/>
                            <a  href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>

            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="login.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="login.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="login.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                         </a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
</div>
    </body> 
</html>