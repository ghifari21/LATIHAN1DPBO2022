<?php

include "TimSepakBola.php";

// menggunakan contructor
$tim1 = new TimSepakBola("Persib Bandung", "Indonesia", "1933", "Achmad Jufriyanto");

// menggunakan setter
$tim2 = new TimSepakBola();
$tim2->setNama("Manchester United");
$tim2->setAsalNegara("Inggris");
$tim2->setTahunBerdiri("1878");
$tim2->setPemain("Christiano Ronaldo");

$tim1->printOut();
echo "<br/>";
$tim2->printOut();

?>