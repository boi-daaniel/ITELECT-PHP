<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INOCENTES ACTIVITY 1</title>
</head>
<body>
    <?php
        $Student_Info = array (
            [
                'name' => 'john doe',
                'grade_1' => '85',
                'grade_2' => '90',
                'grade_3' => '78',
            ],
            [
                'name' => 'jane smith',
                'grade_1' => '92',
                'grade_2' => '88',
                'grade_3' => '95',
            ],
            [
                'name' => 'mark lee',
                'grade_1' => '70',
                'grade_2' => '65',
                'grade_3' => '80',
            ]
        );

        print "Student Grades: <br>";
        foreach($Student_Info as $output){
            print ucwords($output['name'].": ").
                $output['grade_1']. ", ".
                $output['grade_2']. ", ".
                $output['grade_3']. "<br>";
        }
        
        print "<br> Student Average and Status: <br>";
        foreach($Student_Info as $output){
            $average = ($output['grade_1'] + $output['grade_2'] + $output['grade_3']) /3;
            $Student_Status = "";

            if ($average >= 90) 
                $Student_Info = "Outstanding";
            if ($average >= 75 && $average <= 89)
                $Student_Info = "Satisfactory";
            if ($average < 75)
                $Student_Info = "Needs Improvement";

            print ucwords($output['name']." - ").
                "Average: ". number_format($average, 2). ", ".
                "Status: $Student_Info<br>";
        }
    ?>
</body>
</html>