<?php

class Billing
{
    public $itemName;
    public $qty;
    public $rate;

    function __construct()
    {
        $this->itemName="";
        $this->qty=0;
        $this->rate=0;
    }
    function __destruct()
    {
        $this->itemName="";
        $this->qty=0;
        $this->rate=0;
    }
    function calculate()
    {
        $price=$this->qty*$this->rate;
        echo "Price of $this->itemName is $price";
    }
    function setUp($itemName,$qty,$rate)
    {
        $this->itemName=$itemName;
        $this->qty=$qty;
        $this->rate=$rate; 
    }
}

$obj=new Billing();
$obj->setUp('apple',1,250);
$obj->calculate();

?>