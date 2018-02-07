<?php
    
    class mobil{
        public $warna;
        public $jml_ban;
        public $merk;

        private $kecepatan;
        private $arah;
        private $speedometer;


        function __construct(){
            $this->warna = "putih";
            $this->jml_ban = 4;
            $this->merk = "Suduki Swift";

            $this->kecepatan = 0;
            $this->arah = "N";
            $this->speedometer = 0;
        }

        public function getProp($var){
            return $this->$var;
        }

        public function getWarna(){
            return $this->warna;
        }
        
        public function getJmlBan(){
            return $this->jml_ban;
        }

        public function getMerk(){
            return $this->merk;
        }

        public function setWarna($warna){
            $this->warna = $warna;
        }

        public function setJmlBan($jmlban){
            $this->jml_ban = $jmlban;
        }

        public function setMerk($merk){
            $this->merk = $merk;
        }
        
        public function getArah(){
            return $this->arah;
        }

        public function setArah($arah){
            $this->arah = $arah;
        }

        public function getKecepatan(){
            return $this->kecepatan;
        }

        public function tambahKecepatan($percepatan){
            $this->kecepatan += $percepatan;
        }

        public function kurangiKecepatan($percepatan){
            $this->kecepatan -= $percepatan;
        }

        public function getSpeedometer(){
            return $this->speedometer;
        }

        public function tambahSpeedometer($meter){
            $this->speedometer += $meter;
        }

        public function jalan($meter, $waktu){
            if ($this->getArah() == "F"){
                for ($i=0; $i<$waktu; $i++){
                    $this->tambahKecepatan(($meter/$waktu));
                }
                $this->tambahSpeedometer($meter);
                echo "mobil maju ".$meter." meter";
            } else if ($this->getArah() == "B"){
                for ($i=0; $i<$waktu; $i++){
                    $this->kurangiKecepatan(($meter/$waktu));
                }
                $this->tambahSpeedometer($meter);
                echo "mobil mundur ".$meter." meter";
            } else {
                echo "Transmisi mobil dalam keadaan Netral (bukan nama band)";
            }
        }


    }
    $var_arr = ["merk","jml_ban","warna"];
    $mobil = new mobil();
        

    echo "Merk : ".$mobil->getMerk()."<br>";
    echo "Jumlah ban  : ".$mobil->getJmlBan()."<br>";
    echo "Warna : ".$mobil->getWarna()."<br>";

    echo "<br><br>";

    echo "Setelah diubah isinya : <br>";
    $mobil->setJmlBan(100);
    $mobil->setMerk("Mitsubishi Lancer Evo");
    $mobil->setWarna("Transparan");

    echo "Merk : ".$mobil->getMerk()."<br>";
    echo "Jumlah ban  : ".$mobil->getJmlBan()."<br>";
    echo "Warna : ".$mobil->getWarna()."<br><br><br>";

    $mobil->setArah("F");
    $mobil->jalan(10,1);

    echo "<br> Speedometer : ".$mobil->getSpeedometer()." m <br>";
    echo "Posisi : ".$mobil->getKecepatan()."<br><br>"  ;

    ?>
        
    <?php

    $mobil->jalan(100,5);
    echo "<br> Speedometer : ".$mobil->getSpeedometer()." m <br>";

    $mobil->setArah("B");
    $mobil->jalan(500,10);
    echo "<br> Speedometer : ".$mobil->getSpeedometer()." m <br>";


    echo "<br><br><br>";

    echo $mobil->speedometer;
?>