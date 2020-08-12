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
    
    <title>Success Life Style Store</title>
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
    require 'confirm.php';
?>

<div class="container success">
    <div class="jumbotron suc">
      <h1 class="display-4">Your order is confirmed.</h1>
      <p class="lead">Thank you for shopping with us. <a href="products.php" role="button">Click here</a> for purchases any other item. </p>
    </div>
</div>

<?php
    include 'includes/footer.php';
?>

</body>
</html>