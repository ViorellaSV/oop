<?php
class Manusia {
    public $tgl_lahir;
    protected $jenis_kelamin;
    public $umur;
    public $status;

    public function makan() {
        return " Manusia juga makan";
    }
    public function minum() {
        return "Manusia juga minum";
    }
    public function ambil_status ($status_saat_ini){
        return $this->status = $status_saat_ini;
        //$tatus visibilitas private
        //makan harus dibuatkan method untuk mengakses
    }
    public function statusku(){
        return "Mahasiswa";
    }
}

class wanita extends Manusia {
    public function jk ($jk){
        //$jk visibilitas protected
        //maka harus dibuatkan method untuk mengakses dari turunan
        return $this-> jenis_kelamin = $jk;
    }
    
    public function data_diri(){
    $data1 ="<br/>Aku adalah Viorella Sunghaiyon Vidian Khoyin <br/>yang lahir $this->tgl_lahir<br/>sampai sekarang masih $this->status<br/>karna umur saya 20 tahun dan masih kuliah <br/>".$this->jenis_kelamin;
    return$data1;

    }
}
    $saya = new wanita;
    $saya->tgl_lahir = "24 Agustus 2001";
    $saya->jk = ("Perempuan");
    $saya->ambil_status("Mahasiswa");

/*
$saya->status = "Mahasiswa";
jika ditulis akan error karena Private
*/
echo $saya->data_diri();
echo $saya->makan();
echo $saya->minum();


 