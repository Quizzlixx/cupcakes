<?php
/**
 * Kerrie Low
 *
 *
 */
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes | Index</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
<!-- header -->
<div class="container-fluid jumbotron jumbotron-fluid">
    <h2 class="text-center text-monospace">index.php</h2>
    <div class="container d-flex justify-content-between">
        <p>PHP Review Assignment: Cupcakes</p>
        <p class="lead">Written by Kerrie Low</p>
    </div>
</div> <!-- /header -->
<div class="container">
    <form id="cupcakeForm" action="confirmation.php" method="POST"> <!-- Form -->

        <fieldset class="form-group"> <!-- order information -->
            <legend>Order Information</legend>

            <div class="form-group"> <!-- name -->
                <label for="yourName">Your Name</label>
                <input type="text" class="form-control" name="yourName" id="yourName">
                <span class="err" id="err-yourName">
                    Please enter your name
                </span>
            </div><!-- /name -->
        </fieldset><!-- /order information -->

        <fieldset class="form-group"> <!-- flavors -->
            <legend for="flavors">Cupcake Flavors</legend>

            <div class="form-check"> <!-- grasshopper -->
                <input class="form-check-input" type="checkbox" value="grasshopper" id="grasshopper" name="flavors[]">
                <label for="grasshopper" class="form-check-label">The Grasshopper</label>
            </div><!-- /grasshopper -->

            <div class="form-check"> <!-- whiskeyMapleBacon -->
                <input class="form-check-input" type="checkbox" value="whiskeyMapleBacon" id="whiskeyMapleBacon" name="flavors[]">
                <label for="whiskeyMapleBacon" class="form-check-label">Whiskey Maple Bacon</label>
            </div><!-- /whiskeyMapleBacon -->

            <div class="form-check"> <!-- carrotWalnut -->
                <input class="form-check-input" type="checkbox" value="carrotWalnut" id="carrotWalnut" name="flavors[]">
                <label for="carrotWalnut" class="form-check-label">Carrot Walnut</label>
            </div><!-- /carrotWalnut -->

            <div class="form-check"> <!-- saltedCaramelCupcake -->
                <input class="form-check-input" type="checkbox" value="saltedCaramelCupcake" id="saltedCaramelCupcake" name="flavors[]">
                <label for="saltedCaramelCupcake" class="form-check-label">Salted Caramel Cupcake</label>
            </div><!-- /saltedCaramelCupcake -->

            <div class="form-check"> <!-- redVelvet -->
                <input class="form-check-input" type="checkbox" value="redVelvet" id="redVelvet" name="flavors[]">
                <label for="redVelvet" class="form-check-label">Red Velvet</label>
            </div><!-- /redVelvet -->

            <div class="form-check"> <!-- lemonDrop -->
                <input class="form-check-input" type="checkbox" value="lemonDrop" id="lemonDrop" name="flavors[]">
                <label for="lemonDrop" class="form-check-label">Lemon Drop</label>
            </div><!-- /lemonDrop -->

            <div class="form-check"> <!-- tiramisu -->
                <input class="form-check-input" type="checkbox" value="tiramisu" id="tiramisu" name="flavors[]">
                <label for="tiramisu" class="form-check-label">Tiramisu</label>
            </div><!-- /tiramisu -->

        </fieldset> <!-- /flavors -->
    </form> <!-- /form -->
</div>
<!-- jQuery -->
<!-- slim jQuery does not support AJAX -->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
