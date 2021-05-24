<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

$array2 = array();
$array2 = data($transactions);
function data($array){
foreach($array as $key => $val){
    if(is_array($val)){
    $array2[$key]['id'] = $val['id'];
    $array2[$key]['amount'] = abs($val['debit'] - $val['credit']);
    }
}

    return $array2;
}
echo "<pre>";
print_r($array2);
?>

<!-- $array2 = array();
$array2 = data($transactions);
function data($array){
foreach($array as $key => $val){
    if(is_array($val)){
    $array2[$key]['id'] = $val['id'];
    $array2[$key]['amount'] = abs($val['debit'] - $val['credit']);
    }
}

    return $array2;
}
echo "<pre>";
print_r($array2); -->