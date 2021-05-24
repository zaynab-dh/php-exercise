<?php

$str = "My Name is Fred";

for($i = 0; $d = $str[$i]; $i++)
{
    if( $d == " "){

        $out = " ".$temp.$out;
        $temp = "";
    }else{
        $temp.=$d;

    }    
}
echo $temp.$out;
?>

