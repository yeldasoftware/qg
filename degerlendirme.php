<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oyun_kds";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ad = $_POST["id"];
$soyad = $_POST["ad"];
$id = $_POST["soyad"];
$oyunsayisi = $_POST["oyun_sayisi"];
$basariorani = $_POST["basari_orani_yuzdelik"];



$sql = "INSERT INTO oyuncular (id, ad, soyad)
VALUES ('"  . $id . "', '" . $ad . "' , '" . $soyad . "' , ')";
$conn->query($sql);

$sql = "INSERT INTO oyun (oyun_sayisi, basari_orani_yuzdelik)
VALUES ('"  . $oyunsayisi . "', '" . $basariorani . "')";
$conn->query($sql);
