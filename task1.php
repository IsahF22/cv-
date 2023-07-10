
    <!--Motor, mobil plat kuning dan mobi plat putih CC < 1500 : Pertalite 
    Mobil plat putih CC > 1500 - 2000 : Pertamax
    Mobl plat putih  CC > 2000 : Pertamax Turbo
    Buat algoritma untuk menangani cash tersebut 
    maks 8 : 55 -->

    <?php

    $jenisKendaraan = "mobil"; //mobil| motor
    $jenisPlat = "Kuning"; //putih | kuning
    $CC = 1500 ; //0 - tak terhingga

    if ($jenisKendaraan == "motor" || $jenisPlat = "kuning" || $CC < 1500) {
        echo"pertalite";
    }else if ($jenisKendaraan = "mobil" && $jenisPlat = "putih"&&(( $CC >= 1500 && $CC <= 2000))){
        echo"pertamx";