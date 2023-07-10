<?php

$arr = [
    ['siti', 24],
    ['febri',27, "klaten", "perempuan"],
    ['david', 25]
];

// echo $arr[1][0];

foreach($arr as $val){
    echo "Nama ".$val[0]."<br>";
    echo "Umur ".$val[1]."<br>";
    //echo "Umur". $val[2]. "<br>; >>ERROR
}

echo"<br> cara kedua <br>";

for($i = 0; $i < count($arr);$i++){
    for($j =0; $j<count($arr[$i]); $j++){
        echo "Nama ".$arr[$i][$j]."<br>";
    }
}


?>