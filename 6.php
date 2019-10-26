<?php

$angka=[['g','h','i','j'],['a','c','b','e','d'],['a','c','b','e','d']];

sort($angka);  

for($baris=0;$baris<count($angka);$baris++)
{
 for($kolom=0;$kolom<count($angka[$baris]);$kolom++)
 {
  echo $angka[$baris][$kolom]."   ";
 }
 echo "<br>";
}
?>
