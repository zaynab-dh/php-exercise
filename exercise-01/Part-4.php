<?php
$movies = array ( 
    "Musicals" => array ( 
        0 => "Oklahoma",
        1 => "The Music Man",
        2 => "South Pacific",
    ),
    "Dramas" => array ( 
        0 => "Lawrence of Arabia", 
        1 => "To Kill a Mockingbird", 
        2 => "Casablanca",
    ), 
    "Mysteries" => array ( 
        0 => "The Maltese Falcon", 
        1 => "Rear Window", 
        2 => "North by Northwest",
    )
    );
    array_multisort($movies);
    $keys = array_keys($movies);
    for($i = 0; $i < count($movies); $i++) {
        echo $keys[$i] . "<br>";
        foreach($movies[$keys[$i]] as $key => $value) {
            echo "----> " . $key . " = " . $value . "<br>";
        }
        echo "<br>";
    }
?>