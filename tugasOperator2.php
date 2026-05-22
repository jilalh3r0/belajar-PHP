<?php
//ada seorang nasabah yang menabung di bank x dengan saldo awal Rp. 1.000.000,-;
//Bank x menerapkan kebijakan bunga 3% perbulan saldo awal tabungan hitunglah jumlah
//saldo akhir
//nasabah tersebut setelah 11 bulan. lengkapi lah script berikut ini

$saldoawal = 1000000;
$bunga = 0.03;
$bulan = 11;


$saldoAkhir = $saldoawal + ($saldoawal * $bunga * $bulan);

echo "saldo akhir setelah " . $bulan . " bulan adalah : rp." . $saldoAkhir . ",-";