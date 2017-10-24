<?php
 
 require_once "penjumlahan.php";

 $penjumlahan1 = new penjumlahan;
 $penjumlahan1 ->set_penjumlahan(2,10);
 echo "penjumlahan dari bilangan 2 dan 10 adalah :".$penjumlahan1 ->get_penjumlahan();
 ?>