<?php 

// array adalah sebuah variabel yang dapat mengisi banyak nilai
// elemen ada array boleh memiliki tipe data yang berbeda
// array adalah psangan antara key dan value, keynya adalah index yang dimulai dari angka 0




//  * Menampilkan array
// cara lama === $name_of_month = array("january","february","march","april"); ===

//cara baru ==
$name_of_month = ["january","february","march","april"];

// var_dump($name_of_month);

// menambahkan elemen 1 pada array
// echo $name_of_month[1];

// menambahkan elemen baru pada array
$name_of_month [] = "mai";
$name_of_month [] = "juny";

// menampilkan array dengan debuging
var_dump($name_of_month);


 ?>