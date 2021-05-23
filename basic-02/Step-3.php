<?php
function swap($var1, $var2) {
    $var3 = $var1;
    $var1 = $var2;
    $var2 = $var3;
    echo "\nThe number after swapping is: \n";
    echo "var1 =".$var1." and var2=".$var2."\n";
}
swap(32, 45);

?>