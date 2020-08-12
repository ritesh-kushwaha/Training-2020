<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <title>Products</title>
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
        include 'includes/check_if_added.php';
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
    ?>

<div class="container products">
   <div class="jumbotron">
       <div class="container">
        <h1 class="display-4">Welcome to our Lifestyle Store!</h1>
         <p class="lead">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place. </p>
        </div>
    </div>


<!-- Cameras -->
    <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img height="236" src="img/5.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price: Rs. 36000.00</p>
                            <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div> 
            </div>

    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img height="236" src="img/2.jpg" alt="">
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs.40000.00</p>
                    <?php if(check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
        </div>

    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/3.jpg" alt="">
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs.50000.00</p>
                    <?php if(check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/4.jpg" alt="">
            <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Price: Rs.60000.00</p>
             <?php if(check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
            </div>
        </div> 
    </div>
    </div>

<!-- Watches -->
<div class="row text-center" id="watches">
    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/12.jpg" alt="">
                <div class="caption">
                    <h3>HMT Milar</h3>
                    <p>Price: Rs.8000.00</p>
                    <?php if(check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
        </div>

    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/9.jpg" alt="">
                <div class="caption">
                    <h3>Titan Model #201</h3>
                    <p>Price: Rs.3000.00</p>
                    <?php if(check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
    </div>

    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/10.jpg" alt="">
                <div class="caption">
                    <h3>Tital Model #301</h3>
                    <p>Price: Rs.5000.00</p>
                    <?php if(check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
    </div>

    <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/11.jpg" alt="">
                <div class="caption">
                    <h3>Faber Luba #111</h3>
                    <p>Price: Rs.18000.00</p>
                    <?php if(check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
            </div> 
    </div>
</div>


<!-- Shirts -->
<div class="row text-center" id="shirts">
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
                <img src="img/6.jpg" alt="">
                <div class="caption">
                    <h3>H&W</h3>
                    <p>Price: Rs.800.00</p>
                    <?php if(check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                </div>
        </div> 
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/14.jpg" alt="">
            <div class="caption">
                <h3>Luis Philip</h3>
                <p>Price: Rs.2000.00</p>
                <?php if(check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
            </div>
        </div> 
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/13.jpg" alt="">
            <div class="caption">
                <h3>John Zok</h3>
                <p>Price: Rs.1500.00</p>
                <?php if(check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
            </div>
        </div> 
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/8.jpg" alt="">
            <div class="caption">
                <h3>Peter England</h3>
                <p>Price: Rs.1499.00</p>
                <?php if(check_if_added_to_cart(12)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
            </div>
        </div> 
    </div>
</div>

</div>

</div>



<?php
    include 'includes/footer.php';
?>

  </body>
  </html>