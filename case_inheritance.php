<?php
// class Manusia{
//     private $nameClass;
//     private $ageClass;
//     public function __construct()
//     {

//     }
//     public function getNameclass(){
//         return $this -> nameClass;
//     }
//     public function getAgeClass(){
//         return $this -> ageClass;
//     }
//     public function setNameClass($name){
//         return $this -> nameClass =
//         $name;
//     }
// }
// $wonosobo = new Manusia ();
// $wonosobo->setNameClass("HUDA");
// echo "Mahasiswa UNU angkatan 2021 bernama ".$wonosobo->getNameClass();


// class Hewan{
//     public $nameClass;
//     public $ageClass;

// }

// $gajah = new Hewan();
// $gajah ->nameClass = "doni";
// echo $gajah->nameClass;



class Perhitungan
{
    protected $sisiPanjang;
    protected $sisiLebar;
    public function __construct
    ($sisiPanjang, $sisiLebar)
    {
        $this->sisiPanjang = $sisiPanjang;
        $this->sisiLebar = $sisiLebar;
    }

    public function rumusLuas()
    {
        return 
        $this->sisiPanjang * $this->sisiLebar;
    }

}

class Segitiga extends Perhitungan 
{
     function rumusLuas($alas, $tinggi){
        return 0.5 * $alas * $tinggi;
    }
    
} 
class Segitiga extends Perhitungan
{
    protected $sisiAlas;
    protected $sisiTinggi;
    public function __construct($sisiAlas, $sisitinggi)
    {
        $this ->sisiAlas = $sisiAlas;
        $this->sisiTinggi = $sisiTinggi;

    }
    public function rumusLuas(){
        return 0.5 * $this->sisiAlas * $this->sisitinggi;
    }
}


$samaKaki = new Segitiga (5,10);
echo '<br>'. $samaKaki->rumusLuas();
   