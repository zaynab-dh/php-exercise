<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($transactions);
for($i = 0; $i < count($transactions); $i++) {
    foreach($transactions[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
        echo $key . " : " . $value . "<br>";
    }
}
?>




$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($transactions);
for($i = 0; $i < count($transactions); $i++) {
    foreach($transactions[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
} 
