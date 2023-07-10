<!-- 
    IPK > 3.5 Cumlaude
    IPK > 3.9 Cumlaude dan pin emas
    IPK 3 - 3.5 Baik
    IPK < 3 Cukup
-->

<?php

$ipk = 4.5555;
if ($ipk > 3.5 && $ipk <= 4) {
    if($ipk > 3.9){
        echo"Cumlaude dan Pin Emas";
    }else{
        echo"Cumlaude";
    }
}else if ($ipk >= 3 && $ipk <= 3.5){
    echo "baik";
}else if($ipk >= 2 && $ipk < 3){
    echo "cukup";
}else{
    echo "tidak lulus atau nilai IPK salah";
}