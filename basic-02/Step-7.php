<?php
function replace($string){
    $string = str_replace("python", "php", $string);
    return $string;
}
replace("python");
echo replace("python");

?> 