<?php
include 'Employee.php';
include 'Department.php';

class Index
{
  public function __construct()
  {
    $employee1 = new Employee(
      1,
      'Jose Danielle Inocentes',
      '09154586387',
      'daniel.inocentes81@gmail.com',
      '2003-12-30',
      'Male',
      'Lower Mustang, Lapu-Lapu City',
      'Active'
    );
    $employee2 = new Employee(
      2,
      'John Doe',
      '0912345678',
      'john.doe@gmail.com',
      '1999-11-09',
      'Male',
      'Cebu City',
      'Active'
    );
    $department1 = new Department(
      101,
      'IT Department',
      'Handles all technical aspects.',
      'Software Engineer',
      'Alice Smith',
      'Active',
      '34'
    );
    $department2 = new Department(
      102,
      'Marketing Department',
      'Handles employee relations.',
      'Marketing Specialist',
      'Charlie Brown',
      'Active',
      '20'
    );

    echo $employee1->displayEmployeeDetails();
    echo '<br>';
    echo $department1->displayDepartmentDetails();
    echo '<hr>';
    echo $employee2->displayEmployeeDetails();
    echo '<br>';
    echo $department2->displayDepartmentDetails();
  }
}

$index = new Index();
?>