<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300
    //
    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Married - 10%
    Widow - 7% 
    //
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="" method="GET">
        No. of Days Worked: <input type="text" name="days"><br /><br />
        Employee Status:
        <select name="status">
            <option>Regular</option>
            <option>Probationary</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select name="civil">
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button type="submit">Compute Salary</button>
    </form><br /><br />

    <?php
    if (isset($_GET["days"]) && isset($_GET["status"]) && isset($_GET["civil"])) {
        $days = $_GET["days"];
        $status = $_GET["status"];
        $civil = $_GET["civil"];

        // Determine gross salary based on employee status
        switch($status) {
            case "Regular":
                $gross = $days * 500;
                break;
            case "Probationary":
                $gross = $days * 400;
                break;
            case "Casual":
                $gross = $days * 300;
                break;
            default:
                echo "Invalid Employee Status";
                $gross = 0;
                break;
        }

        // Determine tax rate based on civil status
        switch($civil) {
            case "Single":
                $taxRate = 0.12;
                break;
            case "Married":
                $taxRate = 0.10;
                break;
            case "Widow":
                $taxRate = 0.07;
                break;
            default:
                echo "Invalid Civil Status";
                $taxRate = 0;
                break;
        }

        // Calculate deduction and net salary
        $deduction = $gross * $taxRate;
        $netSalary = $gross - $deduction;

        // Output results
        echo "Gross Salary: " . number_format($gross, 2) . "<br />";
        echo "Tax: " . ($taxRate * 100) . "%<br />";
        echo "Deduction: " . number_format($deduction, 2) . "<br />";
        echo "Net Salary: " . number_format($netSalary, 2) . "<br />";
    }
    ?>
</body>

</html>