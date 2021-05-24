<?php
$text="The quick brown Fox jumps over the lazy Dog";
$words = explode(" ", $text); // explode function looks for " " and creates an array, where each word is an element of the array
$now = count($words);
$j = 0;
$i=0;
while($i<$now)
{
if ($words[$i] == "the" or $words[$i] == "The")
{
$j =  $j+1;
}
$i++;
}
echo $j;
?>