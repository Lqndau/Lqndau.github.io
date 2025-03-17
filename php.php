<?php
$datoteka = fopen("dok.txt", "a");
$poruka = [];

if(isset($_POST['submit'])){
    $ime=$_POST['ime'];
	$email=$_POST['email'];
	$poruka=$_POST['poruka'];
fwrite($datoteka, $_POST['ime']."\n");
fwrite($datoteka, $_POST['email']."\n");
fwrite($datoteka, $_POST['poruka']."\n");
echo"Hvala na upitu!";
}