<?php 
include_once "model/ConDB.php";
include_once "model/Course.php";
$obj_name=new Course();
$rs2= $obj_name->getCourse();
?>

<?php
foreach ($rs2 as $result2){
?>
<!-- Course section -->
<div class="col mb-5">
                    <a href="course/12.html" class="card-link">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?=$result2['cs_img'];?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder course-name"><?=$result2['cs_name'];?></h5>
                                    <!-- course tag line-->
                                    <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?=$result2['cs_date'];?></div>
                                    <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                    <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                    <div class="course-note"><i class="fas fa-wallet"></i> <?=$result2['cs_wallet'];?></div>

                                </div>
                            </div>
                        </div>
                    </a>
</div>
<!-- End Course section -->
<?php }?>