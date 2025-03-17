<?php
$datoteka = fopen("redizajn.txt", "a");
$poruka = [];

if(isset($_POST['submit'])){
    $ime=$_POST['ime'];
	$email=$_POST['email'];
	$prezime=$_POST['prezime'];
	$poruka=$_POST['poruka'];
	$dob=$_POST['dob'];
	$myfile=$_POST['myfile'];
	
fwrite($datoteka, $_POST['ime']."\n");
fwrite($datoteka, $_POST['email']."\n");
fwrite($datoteka, $_POST['poruka']."\n");
fwrite($datoteka, $_POST['dob']."\n");
fwrite($datoteka, $_POST['prezime']."\n");
fwrite($datoteka, $_POST['myfile']."\n");
echo"Hvala na dizajnu!";
}