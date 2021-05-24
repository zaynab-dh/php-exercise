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


// function armstrong_number($num) {
//   $sl = strlen($num);
//   $sum = 0;
//   $num = (string)$num;
//   for ($i = 0; $i < $sl; $i++) {
//     $sum = $sum + pow((string)$num{$i},$sl);
//   }
//   if ((string)$sum == (string)$num) {
//     return "True";
//   } else {
//     return "False";
//   }
// }
// echo "Is 153 Armstrong number? ".armstrong_number(153);
// echo "\nIs 21 Armstrong number? ".armstrong_number(21);
// echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
