<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(1, 2 ,3 , 4 ,5);
        $num = 197235.1312;
        $date = "2001-09-11 18:02:12";

        $str = "Looc, mandaue city, cebu";
        echo ucfirst($str);
        echo "</br></br>";

        echo ucwords($str);
        echo "</br></br>";

        echo strtoupper($str);
        echo "</br></br>";

        echo ucwords(strtolower($str));
        echo "</br></br>";

        echo strlen($str);
        echo "</br></br>";

        $explodedstr = explode(" ", $str);
        print_r($explodedstr);
        echo "</br></br>";

        $implodeArray = implode(" ", $array);
        print_r($implodeArray);
        echo "</br></br>";

        echo number_format($num, 3);
        echo "</br></br>";

        echo ceil($num);
        echo "</br></br>";

        echo floor($num);
        echo "</br></br>";

        echo date('Y-m-d H:i:s', strtotime($date));
        echo "</br></br>";

        echo date('F-d-Y h:i:s', strtotime($date));
        echo "</br></br>";
        

    ?>
</body>
</html>