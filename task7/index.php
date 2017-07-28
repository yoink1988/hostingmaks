<?php
include ('config.php');
include ('libs/Controller.php');
include ('libs/View.php');
include ('libs/Model.php');
try
{
    $obj = new Controller();
    $obj->run();
}
catch(Exception $e)
{
    echo $e->getMessage();               
}













