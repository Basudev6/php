<?php
    
    abstract class class1
    {
        abstract function fun1();
    }
    class class2 extends class1
    {
        function fun1(){
            echo "Function 2";
        }
    }
    class class3 extends class1
    {
        function fun1(){
            echo "Function 3";
        }
    }

    $obj=new class3();
    $obj->fun1();
?>