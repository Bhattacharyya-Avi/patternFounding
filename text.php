<?php
$html = "tadadattaetadadadada"; // original string
$needle = "dada"; // part need to find
$lastPos = 0; // for storing the last position
$positions = array(); 
$times = 0; // for counting the existence

// str pos function find a string inside another function and return the position of that string.
while (($lastPos = strpos($html, $needle, $lastPos))!== false) {
    $positions[] = $lastPos; // if found then store the starting position of the string 
    $lastPos = $lastPos + strlen($needle); // start finding again fom the last part of the needle found.
    $times = $times+1; // counting the number of existence
}

echo $times;