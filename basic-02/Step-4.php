<?php
function isArmstrong($num){
    $sum = 0;
    $x = $num;
    while($x != 0)
    {
        $rem = $x % 10;
        $sum = $sum + $rem*$rem*$rem;
        $x = $x / 10;
    }
    if ($num == $sum)
        return 1;
    return 0;

}

$num = 407;
$flag = isArmstrong($num);
if ($flag == 1)
    echo "Yes";
else
    echo "No"
?>