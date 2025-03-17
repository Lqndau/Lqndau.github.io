<?php
$datoteka = fopen("dizajn.txt", "a");
$poruka = [];

if(isset($_POST['submit'])){
    $ime=$_POST['ime'];
	$email=$_POST['email'];
	$prezime=$_POST['prezime'];
	$dob=$_POST['dob'];
	
fwrite($datoteka, $_POST['ime']."\n");
fwrite($datoteka, $_POST['email']."\n");
fwrite($datoteka, $_POST['dob']."\n");
fwrite($datoteka, $_POST['prezime']."\n");
fwrite($datoteka, $_POST['dizajn']."\n");
echo"Hvala na Vašem glasu za novi dizajn!";
}