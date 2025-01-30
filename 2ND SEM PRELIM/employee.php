<?php

class Employee
{
    private $employeeID;
    private $employeeName;
    private $phoneNumber;
    private $email;
    private $birthdate;
    private $gender;
    private $address;
    private $status;

    // Constructor
    public function __construct($employeeID, $employeeName, $phoneNumber, $email, $birthdate, $gender, $address, $status)
    {
        $this->employeeID = $employeeID;
        $this->employeeName = $employeeName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->address = $address;
        $this->status = $status;
    }

    // Getters
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getStatus()
    {
        return $this->status;
    }

    // Setters
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    // Method to display employee details
    public function displayEmployeeDetails()
    {
        return "Employee ID: {$this->employeeID}<br>
                Name: {$this->employeeName}<br>
                Phone: {$this->phoneNumber}<br>
                Email: {$this->email}<br>
                Birthdate: {$this->birthdate}<br>
                Gender: {$this->gender}<br>
                Address: {$this->address}<br>
                Status: {$this->status}<br>";
    }
}

?>
