<div class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="container"> 
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <?php if (isset($_SESSION['email']))  {  ?> 
      </button> <a class="navbar-brand" href="products.php">Lifestyle Store</a> 
      <?php  } else {  ?> 
        </button> <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        <?php  }   ?>

    </div> 
    <div class="collapse navbar-collapse" id="myNavbar"> 
      <ul class="nav navbar-nav navbar-right"> 
        <?php if (isset($_SESSION['email']))  {  ?> 
          <li>
            <a href = ""><span class = "glyphicon glyphicon-user"></span> <?php echo ($_SESSION['email']); ?> </a>
          </li>
          <li>
            <a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a>
          </li> 
          <li>
            <a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a>
          </li> 
          <li>
            <a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
          </li> 
          <?php  } else {  ?> 
            <li>
              <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </li> 
            <li>
            <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li> 
          <?php  }   ?> 
        </ul> 
      </div> 
    </div> 
  </div>