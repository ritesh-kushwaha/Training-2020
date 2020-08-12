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
    
    <title>Cart</title>
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


<!-- Main -->
<div style="margin-bottom: 50px;">
<div class="content">
        <div class="container">        
        <table class="table table-striped table-responsive">
        <?php
            if(isset($_GET['m1'])) {
            $disc=$_GET['m1'];
            }
           $sum = 0;
           $user_id = $_SESSION['user_id'];
           $query = "SELECT products.price AS Price, products.pid, products.name AS Name FROM users_products JOIN products ON users_products.product_id = products.pid WHERE users_products.user_id='$user_id' and status='Added To Cart'";
           $result = mysqli_query($con, $query)or die($mysqli_error($con));
           if (mysqli_num_rows($result) >= 1) {
        ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["pid"];
                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>
    <!-- !Main -->
    </div>
      <?php
        include 'includes/footer.php';
      ?>
  </body>
  </html>