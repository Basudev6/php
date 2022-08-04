<?php

class Employee
{
    public $name;
    public $address;

    function __construct()
    {
        $this->name="";
        $this->address="";
    
    }

    function __destruct()
    {
        $this->name="";
        $this->address="";
    
    }
    
    function setName($name)
    {
        $this->name=$name;
    }

    function setAddress($address)
    {
        $this->address=$address;
    }


}

class Permanent extends Employee
{
    public $salary;
    public $post;

    function __construct()
    {
        $this->salary=0;
        $this->post="";
    }
    function __destruct()
    {
        $this->salary=0;
        $this->post="";
    }
    function setSalary($salary)
    {
        $this->salary=$salary;
    }
    function setPost($post)
    {
        $this->post=$post;
    }
    function displayAll()
    {
        echo $this->name;
        echo $this->address;
        echo $this->salary;
        echo $this->post;
    }
}

$obj=new Permanent();
$obj->setName('ram');
$obj->setAddress('ktm');
$obj->setSalary(50000);
$obj->setPost('manager');
$obj->displayAll();

?>