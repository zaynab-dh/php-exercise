<?php
$course_name = 'Rust, the language of no bugs';
$enrolled_students = 20;
$price = 29.99;
$on_discount= FALSE;
if ($price < 29.99)
{
    $on_discount= TRUE; 
}
    echo "Course title: $course_name <br />";
    echo "Enrolled Students: $enrolled_students  <br />";
    echo "Course price:";
    echo (round($price));
    echo " $ USD <br />";
    if ($on_discount) {echo "Course on discount: Yes";}
    else{echo "Course on discount: No";}

?>