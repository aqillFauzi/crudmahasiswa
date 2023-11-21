<?php

class Perpustakaan
{
    function proses()
    {
        $bukuPinjam = 150;
        $bukuTersedia = 300;
        $bukuRusak = 100;
        $bukuKembali = 200;


        echo "Total Keseluruhan Buku " . ($bukuPinjam + $bukuTersedia + $bukuRusak + $bukuKembali) . " buku"  ."<br>";
        
        echo "Total Buku yang tersedia jika sudah dikembalikan sebanyak 75 buku yaitu " . ($bukuTersedia + 75) . " buku" ."<br>";
        echo "Total buku keseluruhan  jika 20 % buku yang rusak dibuang adalah " . ($bukuPinjam + $bukuTersedia + $bukuRusak + $bukuKembali-(0.20*$bukuRusak)) . " buku" ."<br>";
    }
}
?>