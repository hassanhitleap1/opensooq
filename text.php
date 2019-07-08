<?php
// for test class Validation , Hamming and LevenShtein
include './Validation.php';
include './Hamming.php';
include './LevenShtein.php';



$strone ="kibbrs"; 
$strtwo= "sibbrs";


echo LevenShtein::levensht($strone,$strtwo);


$hamming= new Hamming($strone,$strtwo);

echo "<br/>";
echo $hamming->hammingDist();