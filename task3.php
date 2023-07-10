<!-- 
    dolar terhadap rupiah 1 dolar = 14500 
    andi membeli beberapa saham dimana 1 lembar seharga 3 dolar. saham akam mengikuti sentimen. 
    jika sentimen normal maka harga normal yaitu 3 dolar. jika sentimen buruk maka harga saham turun 50%
    jika sentimen baik maka harga saham naik 100%

    contoh andi beli 10 saham, sentimen baik maka harganya adalahh 14500 * 10 * 3 * 2 yaitu 60 * 14500 =870000 Rupiah
    buat algoritma tsb.
 -->

 <?php

 $TukarDolarRupiah = 14500;
 $HargaSahamDolar = 3;
 $Jumlahsaham = 10;
 $Sentimen = "baik"

 if ($sentimen == "normal"){
    HargaSahamRupiah = $TukarDolarRupiah * $Jumlahsaham * $HargaSahamDolar * 1;
}else if ($sentimen == "buruk"){
    HargaSahamRupiah = $TukarDolarRupiah * $Jumlahsaham * $HargaSahamDolar/ 2;
}else if ($sentimen == "baik"){
    HargaSahamRupiah = $TukarDolarRupiah * $Jumlahsaham * $HargaSahamDolar * 2;
}else {
    echo "sentimen tidak masuk dalam perhitungan";
}
echo "Biaya Pembelian Saham = ". $HargaSahamDolar;  

?>