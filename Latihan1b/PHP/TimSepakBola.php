<?php

class TimSepakBola
{
    private $nama = null;
    private $asalNegara = null;
    private $tahunBerdiri = null;
    private $pemain = null;

    // constructor
    public function __construct($nama = null, $asalNegara = null, $tahunBerdiri = null, $pemain = null)
    {
        $this->nama = $nama;
        $this->asalNegara = $asalNegara;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->pemain = $pemain;
    }

    // setter and getter method
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setAsalNegara($asalNegara)
    {
        $this->asalNegara = $asalNegara;
    }

    public function getAsalNegara()
    {
        return $this->asalNegara;
    }

    public function setTahunBerdiri($tahunBerdiri)
    {
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function getTahunBerdiri()
    {
        return $this->tahunBerdiri;
    }

    public function setPemain($pemain)
    {
        $this->pemain = $pemain;
    }

    public function getPemain()
    {
        return $this->pemain;
    }

    // output
    public function printOut()
    {
        echo "Nama Tim      : ". $this->getNama(). "<br/>";
        echo "Asal Negara   : ". $this->getAsalNegara(). "<br/>";
        echo "Tahun Berdiri : ". $this->getTahunBerdiri(). "<br/>";
        echo "Pemain        : ". $this->getPemain(). "<br/>";
    }
}

?>