<?php

require_once "Department.php"; // This will also include Employee.php indirectly

// Multi-dimensional array to store departments and employees
$company = [
    "IT Department" => new Department(1, "IT Department"),
    "HR Department" => new Department(2, "HR Department"),
    "Finance Department" => new Department(3, "Finance Department")
];

// Adding employees to departments
$company["IT Department"]->addEmployee(new Employee(101, "John Doe", "Software Engineer", 50000));
$company["IT Department"]->addEmployee(new Employee(102, "Jane Smith", "System Analyst", 48000));

$company["HR Department"]->addEmployee(new Employee(201, "Alice Brown", "HR Manager", 45000));
$company["HR Department"]->addEmployee(new Employee(202, "Bob White", "Recruiter", 35000));

$company["Finance Department"]->addEmployee(new Employee(301, "Charlie Green", "Accountant", 40000));

// Display Employees grouped by Department
foreach ($company as $departmentName => $department) {
    echo "<h2>{$department->dept_name}</h2>";
    echo "<ul>";
    foreach ($department->getEmployees() as $employee) {
        echo "<li>" . $employee->getInfo() . "</li>";
    }
    echo "</ul>";
}
?>
