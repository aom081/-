<?php
$cs_img="images/12.png";
$cs_name=$_POST["cs_name"];
$cs_date=$_POST["cs_data"];
$cs_wallet=$_POST["cs_wallet"];
?>

<?php
$course=array();
$course["cs_img"]=$cs_img;
$course["cs_name"]=$cs_name;
$course["cs_date"]=$cs_date;
$course["cs_wallet"]=$cs_wallet;
print_r($course);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
echo $rs2= $obj_name->addCourse($course);
?>

<?php
if($rs2){
include "../view/view_course_card.php";
}
?>
