<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Store</title>
</head>
<body>
    <?php 
        $name = "PHP Store";
        $credit = 1000;

        echo "<h1>Welcome to ".$name."!</h1>";
        echo "<h2>You have $$credit in your wallet.</h2>";

        $products['Computer'] = 750;
        $products['Car'] = 15000;
        $products['iPhone'] = 1000;
        $products['Toaster'] = 75;

        // echo "<p>A car costs $".$products['Car'].".</p>";
        foreach($products as $key => $value) {
            echo "<p>The $key costs $$value.</p>";
        }

        echo "<h2>Items you can afford</h2>";

        foreach($products as $key => $value) {
            if($value <= $credit) {
                echo "<p>$key</p>";
            }
        }

        $amount = 800;
        $taxRate = 0.0825;
        $addedTax = $amount*$taxRate;
        echo "<p>$addedTax</p>";
        echo "<p>".tax_calc(750, 0.223)."</p>";

        function tax_calc($amount, $tax) {
            $calculate_tax = $amount * $tax;
            $return_value = round($amount + $calculate_tax, 2);
            return $return_value;
        }
    ?>
</body>
</html>