<?php
include "Mahasiswa.php";

// menggunakan setter method
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNim("2000952");
$mahasiswa1->setNama("Ghifari Octaverin");
$mahasiswa1->setGender("Laki-Laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester("4");

// menggunakan constructor
$mahasiswa2 = new Mahasiswa("2000259", "Gina", "Perempuan", "Matematika", "6");

$mahasiswa1->printOut();
echo "<br/>";
$mahasiswa2->printOut();


?>