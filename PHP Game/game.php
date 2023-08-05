<?php
echo "Ini adalah game hehe\n";
echo "Game tebak angka\n";
echo "Silahkan tebak angka dari 1 sampai 9\n";
$random = rand(1, 9);
$tebakan = trim(fgets(STDIN));
while ($tebakan != $random) {
  echo "Maaf anda salah\n";
  echo "Silahkan tebak angka dari 1 sampai 9\n";
  $tebakan = trim(fgets(STDIN));
}
echo "Selamat anda menang\n";
?>