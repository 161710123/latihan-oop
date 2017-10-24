<?php

require_once 'latihan2.php';

$konstrak = new konstrak ('dika','bandung','XI RPL1','ada');
echo "nama :".$konstrak->get_nama() . '<br>';
echo "tempatlahir :".$konstrak->get_tempatlahir() . '<br>';
echo "kelas :".$konstrak->get_kelas() . '<br>';
echo "status :".$konstrak->get_status() . '<br>';



?>