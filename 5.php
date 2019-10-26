<?php
function GenerateSerial() {
$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$sn = '';
$max = count($chars)-1;
for($i=0;$i<20;$i++){
 $sn .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
  }
return $sn;
 }


 // Generate SN
$serial =  GenerateSerial() ;


// Check if it exists, then re-generate

 function checkifSerialexist () {

 $statement = $dbh->prepare("SELECT `id` FROM `table` WHERE `SN` = :existSN");
 $statement->bindParam(':existSN',  $serial, PDO::PARAM_STR); 
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $result = $statement->fetchAll();
 $serial_count = $statement->rowCount();

 if ($serial_count > 0) {

 $serial =  GenerateSerial() ;

} 
?>
