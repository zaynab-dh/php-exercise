<?php
$course_name = 'Rust, the language of no bugs';
$enrolled_students = 20;
$price = 29,99 '$ USD';
if ($price)
{echo "Course title: $course_name <br />";
echo "Enrolled Students: $enrolled_students  <br />";
echo "Course price: ceil($price)   <br />";
echo "Course on discount: No";}
else 
{
    echo "Course title: $course_name <br />";
    echo "Enrolled Students: $enrolled_students  <br />";
    echo "Course price: (ceil($price))  <br />";
    echo "Course on discount: Yes";
}

?>