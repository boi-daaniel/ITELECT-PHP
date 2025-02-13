<?php

class Employee {
    public $id;
    public $name;
    public $position;
    public $salary;

    public function __construct($id, $name, $position, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "{$this->id} - {$this->name} ({$this->position}) - Salary: ₱" . number_format($this->salary, 2);
    }
}
?>
