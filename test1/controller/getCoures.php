<?php
echo $id = $_GET["id"];

include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
echo $rs2= $obj_name->getCourse($id);
?>
