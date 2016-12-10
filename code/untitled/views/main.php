<?php
session_start();
//$_SESSION["username"] = "username"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</html>
<body style="padding-bottom: 150px">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sk8 Shop</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <?php if(!isset($_SESSION['username'])) {
                echo
                "<li ><a href = 'products.php' > Products </a ></li >
                <li ><a href = 'cart.php' > My Cart </a ></li >
                <li ><a href = 'orders.php' > Completed Orders </a ></li >";
            }
            ?>
        </ul>
        <?php if(!isset($_SESSION['username'])) {
            echo
            "<ul class='nav navbar-nav navbar-right'>
            <li><a href='sign_up.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
            <li><a href='sign_in.php'><span class='glyphicon glyphicon-log-in'></span> Sign In</a></li>
            </ul>";
        }
        ?>

    </div>
</nav>
<div class="container-fluid"><?php include($content);?></div>
</body>
</html>
<?php session_unset();

// destroy the session
session_destroy();?>
