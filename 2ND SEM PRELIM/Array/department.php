<?php

require_once "Employee.php";

class Department {
    public $dept_id;
    public $dept_name;
    public $employees = []; // Array of Employee objects

    public function __construct($dept_id, $dept_name) {
        $this->dept_id = $dept_id;
        $this->dept_name = $dept_name;
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}
?>
