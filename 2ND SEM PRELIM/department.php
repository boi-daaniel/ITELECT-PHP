<?php

class Department
{
    private $departmentID;
    private $departmentName;
    private $description;
    private $position;
    private $departmentManager;
    private $status;
    private $totalEmployees;

    // Constructor
    public function __construct($departmentID, $departmentName, $description, $position, $departmentManager, $status, $totalEmployees)
    {
        $this->departmentID = $departmentID;
        $this->departmentName = $departmentName;
        $this->description = $description;
        $this->position = $position;
        $this->departmentManager = $departmentManager;
        $this->status = $status;
        $this->totalEmployees = $totalEmployees;
    }

    // Getters
    public function getDepartmentID()
    {
        return $this->departmentID;
    }

    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getDepartmentManager()
    {
        return $this->departmentManager;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function getTotalEmployees()
    {
        return $this->totalEmployees;
    }
    // Setters
    public function setDepartmentID($departmentID)
    {
        $this->departmentID = $departmentID;
    }

    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setDepartmentManager($departmentManager)
    {
        $this->departmentManager = $departmentManager;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setTotalEmployees($totalEmployees)
    {
        $this->totalEmployees = $totalEmployees;
    }

    // Method to display department details
    public function displayDepartmentDetails()
    {
        return "Department ID: {$this->departmentID}<br>
                Department: {$this->departmentName}<br>
                Description: {$this->description}<br>
                Position: {$this->position}<br>
                Manager: {$this->departmentManager}<br>
                Status: {$this->status}<br>
                Total Department Employees: {$this->totalEmployees}<br>";
    }
}

?>