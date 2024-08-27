<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
       Starting Number: <input type="text" name="num1" placeholder="num1"><br /><br />
       Ending Number: <input type="text" name="num2" placeholder="num2"><br /><br />
    <button type="submit">Display</button><br /><br />
    </form>
    <?php
        if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = (int)$_GET["num1"];
        $num2 = (int)$_GET["num2"];

        echo "Starting Number: $num1 <br /><br />";
        echo "Ending Number: $num2 <br /><br />";

        function isPrime($number) {
            if ($number < 2) 
                return false;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) 
                    return false;
            }
            return true;
        }

        // Print Odd Numbers
        echo "Odd numbers: ";
        if ($num1 <= $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 2 != 0) 
                    echo "$i ";
            }
        } else {
            for ($i = $num1; $i >= $num2; $i--) {
                if ($i % 2 != 0) 
                    echo "$i ";
            }
        }
        echo "<br /><br />";

        // Print Even Numbers
        echo "Even numbers: ";
        if ($num1 <= $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 2 == 0) 
                    echo "$i ";
            }
        } else {
            for ($i = $num1; $i >= $num2; $i--) {
                if ($i % 2 == 0) 
                    echo "$i ";
            }
        }
        echo "<br /><br />";

        // Print Divisible by 3 Numbers
        echo "Divisible by 3 Numbers: ";
        if ($num1 <= $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 3 == 0) 
                    echo "$i ";
            }
        } else {
            for ($i = $num1; $i >= $num2; $i--) {
                if ($i % 3 == 0) 
                    echo "$i ";
            }
        }
        echo "<br /><br />";

        // Print Divisible by 5 Numbers
        echo "Divisible by 5 Numbers: ";
        if ($num1 <= $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 5 == 0) 
                    echo "$i ";
            }
        } else {
            for ($i = $num1; $i >= $num2; $i--) {
                if ($i % 5 == 0) 
                    echo "$i ";
            }
        }
        echo "<br /><br />";

        // Print Prime Numbers
        echo "Prime numbers: ";
        if ($num1 <= $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if (isPrime($i)) 
                    echo "$i ";
            }
        } else {
            for ($i = $num1; $i >= $num2; $i--) {
                if (isPrime($i)) 
                    echo "$i ";
            }
        }
    }
        
    ?>
</body>
</html>
