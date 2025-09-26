<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf D : D";
}


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer<br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i=1; $i <= $jumlahLahan ; $i++) { 
   $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah<br>";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<br>";
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
       echo "Nilai: $nilai (tidak lulus) <br>";
       continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}
$daftarNilai = [85,92,78,64,90,75,88,79,70,96];
$totalNilai = 0;
sort($daftarNilai);
$jumlah = 0;

for ($i=2; $i < count($daftarNilai)-2;$i++){
    $totalNilai += $daftarNilai[$i];
    $jumlah++;
}
$rata = $totalNilai / $jumlah;
echo"Total nilai : ".$totalNilai."<br>";
echo"Rata-rata: ".$rata ."<br>";
echo "Daftar Nilai:<br>";
for ($i=0; $i < count($daftarNilai) ; $i++) { 
   echo $daftarNilai[$i]." " ;
}
$hargaproduk = 120000;
echo "<br>Harga Produk : ".$hargaproduk . "<br>";
$diskon = $hargaproduk  - ($hargaproduk * 0.2);
echo "Total Yang harus dibayarkan setelah diskon adalah: ".$diskon;
$poin = [80,70,90,60,80,900];
$totalPoin = 0;
for ($i=0; $i < count(($poin)); $i++) { 
    $totalPoin += $poin[$i];
}
echo "<br>Total Poin Saat Ini: ".$totalPoin;
if ($totalPoin > 500) {
   echo "<br>Apakah Pemain mendapatkan hadiah tambahan? YA";
} else{
    echo "<br>Apakah Pemain mendapatkan hadiah tambahan? Tidak";
}; 
?>