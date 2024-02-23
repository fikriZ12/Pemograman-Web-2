<?php

$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng", "i"=>"ikan"];
echo 'Ini hewan : ' .$animals["k"];
echo "<br>";
echo 'Ini hewan : ' .$animals["i"];
echo '<br>';


foreach ($animals as $animals) {
    echo '<li>'.$animals.'</li>';
}