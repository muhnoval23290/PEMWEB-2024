<?php
//tangkap input form\
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

// hitung  nilai total (30% uts+ 35% uas + Tugas 35%)\
// $nilai_total = ()

//tampilkan hasil input
echo "Nama Lengkap: $nama";
echo " <br> Mata Kuliah: $matkul";
echo " <br> Nilai UTS: $uts";
echo " <br> Nilai UAS: $uas";
echo " <br> Nilai Tugas: $tugas";
echo "<br> Predikat: :";
