<?php

require_once "penjumlahan.php";
$penjumlahan1 = new penjumlahan;
$penjumlahan1->set_penjumlahan(21,3);
echo "=======================================".'<br>';
echo "Perhitungan bilangan 21 dengan bilangan 3".'<br>';
echo "=======================================".'<br>';
echo "Penjumlahan =:".$penjumlahan1->get_penjumlahan().'<br>';
echo "Pengurangan =:".$penjumlahan1->get_pengurangan().'<br>';
echo "Perkalian =:".$penjumlahan1->get_perkalian().'<br>';
echo "Pembagian =:".$penjumlahan1->get_pembagian().'<br>';
?>