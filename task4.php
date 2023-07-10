<?php
// tolong implementasikan interface pada kelas induk(bukan nama kelas)
//pada kelas anak buatlah 3 array 
///array untuk jajargenjang memiliki 2 dimensi untuk alas dan tinggi
// array untuk belaj ketupat memiliki 2 dimensi untuk diagonal 1 dan diagonal 2
// array untuk lingkaran memiliki 1 dimensi untuk jari-jari
//nilai pada array random dari 1 sampai 20 
// setiap rumus akan melakukan perhitungan sebanyak 5 x


interface PerhitunganLuas{
    public function jajarGenjang($alas,$tinggi); // alas * tinggi 
    public function belahKetupat($diagonal1,$diagonal2); // diagonal 1 * diagonal 2 / 2
    public function lingkaran($jariJari); // phi(27) *r*r
}

class BangunDatar implements PerhitunganLuas{
    function __construct(){

    }
}

    public function jajarGenjang($alas,$tinggi)
{
    return $alas * $tinggi 
}
public function belahKetupat($diagonal1,$diagonal2)
{
    return ($diagonal1 * $diagonal2)/2
}
public function lingkaran($jariJari)
{
    return 22/7 * $jariJari * $jariJari
}

class HitungBangunDatar extends BangunDatar{

    public function hitungjajarGenjang()
        {
            $arrayNilaiJajarGenjang =[];
            for($i = 0; $i< 5 ; $i++){
                $arrayNilaiJajarGenjang[$i][0] =rand(1,20);
                $arrayNilaiJajarGenjang[$i][1] =rand(1,20);
            }
            for($i = 0 ; $i< 5 ; $i++){
                eceho "Jajar Genjang ke ".($i+ 1) . "=". $this->jajarGenjang
                ($arrayNilaiJajarGenjang[$i][0],$arrayNilaiJajarGenjang[$i][1])."<br>";
            }
        }
    }
    public function hitungBelahKetupat()
    {
    $arrayBelahKetupat =[];
    for($i = 0; $i<5 ; $i++){
    $arrayBelahKetupat[$i][0] = rand(1,20);
    $arrayBelahKetupat[$i][1] = rand(1,20);
}
for($i = 0 ; $i< 5 ; $i++){
    echo "Belah Ketupat ke ". ($i + 1) . "=".$this->belahKetupat
    ($arrayBelahKetupat[$i][0], $arrayBelahKetupat[$i][1]). "<br>";
}

    }
    public function hitungLingkaran()
        $arrayLingkaran =[];
    for($i = 0; $i<5 ; $i++){
    $arrayBelahKetupat[$i] = rand(1,20);
    
for($i = 0 ; $i< 5 ; $i++)
    echo "Belah Ketupat ke ". ($i + 1) . "=".$this->belahKetupat
    ($arrayBelahKetupat[$i][0], $arrayBelahKetupat[$i][1]). "<br>";

    }
    

?>