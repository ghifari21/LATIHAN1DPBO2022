<?php

class Mahasiswa
{
    private $nim = null;
    private $nama = null;
    private $gender = null;
    private $prodi = null;
    private $semester = null;

    // constructor
    public function __construct($nim = null, $nama = null, $gender = null, $prodi = null, $semester = null)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // setter dan getter method
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    // output
    public function printOut()
    {
        echo "NIM   : ". $this->getNim()."<br/>";
        echo "Nama  : ". $this->getNama()."<br/>";
        echo "Jenis Kelamin : ". $this->getGender()."<br/>";
        echo "Prodi : ". $this->getProdi()."<br/>";
        echo "Semester  : ". $this->getSemester()."<br/>";
    }
}

?>