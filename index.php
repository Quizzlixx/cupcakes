<?php
/**
 * Kerrie Low
 * 1.10.20
 * Full Stack Web Development
 * PHP Review Assignment: Cupcakes
 * http://www.klow.greenriverdev.com/328/cupcakes/index.php
 * This program will display a form for the user to order cupcakes. Upon valid submission, the form will
 * be hidden and the order summary will be displayed.
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
    <link rel="stylesheet" type="text/css" href="styles/cupcakes.css">
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
    <?php
    // flavor associative array
    $cupcakes = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon", "carrot" => "Carrot Walnut",
        "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    // variables
    $displayForm = true;
    $name = $nameErr = $cupcakeErr = $checked = $orderSummary = $cupcakeArray = $value = "";
    $isValid = true;
    $price = 3.50;
    $total = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // validate name
        if (empty($_POST['name'])) {
            $nameErr = "Name is required.";
            $isValid = false;
        } else {
            $name = test_input($_POST['name']);
        }

        // validate array
        if (empty($_POST['cupcakes'])) {
            $cupcakeErr = "You must select at least one cupcake.";
            $isValid = false;
        } else {
            $cupcakeArray = $_POST['cupcakes'];
            $orderArray = [];
            foreach ($cupcakeArray as $value) {
                if (array_key_exists($value, $cupcakes)) {
                    $orderArray[$value] = $cupcakes[$value];
                    $total += $price;
                } else {
                    $cupcakeErr = "Invalid cupcake flavor.";
                }
            }
        }
    }

    if (isset($_POST['submit']) && $isValid) {
        echo "<h1>Thank you for your order, $name!</h1>";
        echo "<p>Order summary:</p>";
        echo "<ul>";
        foreach ($orderArray as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
        echo "Your total is: $$total";
    }

    // from w3 schools
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <?php
    if (isset($_POST['submit']) && $isValid) {
        $displayForm = false;
    }
    if ($displayForm) {
        ?>
        <form id="cupcake-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Form -->

            <fieldset class="form-group"> <!-- order information -->
                <legend>Order Information</legend>

                <div class="form-group"> <!-- name -->
                    <label for="yourName">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
                    <span class="lead text-danger">
                    <?php
                    echo $nameErr;
                    ?>
                </span>
                </div><!-- /name -->
            </fieldset><!-- /order information -->

            <fieldset class="form-group"> <!-- flavors -->
                <legend>Cupcake Flavors</legend>
                <?php
                foreach ($cupcakes as $name => $flavor) {
                    echo "<div class='form-check'>";
                    echo "<input type='checkbox' class='form-check-input' value='$name' id='$name' name='cupcakes[]'>";
                    echo "<label class='form-check-label' for='$name'>$flavor</label>";
                    echo "</div>";
                }
                ?>
                <span class="lead text-danger">
                <?php
                echo $cupcakeErr;
                ?>
            </span>

            </fieldset> <!-- /flavors -->

            <button type="submit" class="btn btn-primary" name="submit" id="submit">Order</button>
        </form> <!-- /form -->
        <?php
    }
    ?>

</div>
<!-- jQuery -->
<!-- slim jQuery does not support AJAX -->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- my JS -->
<script src="scripts/cupcakes.js"></script>
</body>
</html>
