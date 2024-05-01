<?php
class Employee
{
    private $id, $name, $dept, $salary;

    public function __construct($id, $name, $dept, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $salary;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDept()
    {
        return $this->dept;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
class Manager extends Employee
{
    private $bonus;
    public function __construct($id, $name, $dept, $salary, $bonus)
    {
        parent::__construct($id, $name, $dept, $salary);
        $this->bonus = $bonus;
    }
    public function getTotalSalary()
    {
        return $this->getSalary() + $this->bonus;
    }
}

$managers = [
    new Manager(1, "om", "BCA", 50000, 10000),
    new Manager(2, "omkar", "BCS", 250000, 30000),
    new Manager(3, "Rahul", "MCA", 150000, 20000)
];

$maxTotalSalaryManager = $managers[0];


foreach ($managers as $manager) 
{
    if ($manager->getTotalSalary() > $maxTotalSalaryManager->getTotalSalary()) 
    {
        $maxTotalSalaryManager = $manager;
    }
}

echo "Manager with the maximum total salary:<br>";
echo "ID: " . $maxTotalSalaryManager->getId() . "<br>";
echo "Name: " . $maxTotalSalaryManager->getName() . "<br>";
echo "Department: " . $maxTotalSalaryManager->getDept() . "<br>";
echo "Salary: " . $maxTotalSalaryManager->getSalary() . "<br>";
echo "Bonus: " . $maxTotalSalaryManager->getTotalSalary() - $maxTotalSalaryManager->getSalary() . "<br>";
echo "Total Salary: " . $maxTotalSalaryManager->getTotalSalary() . "<br>";
?>
