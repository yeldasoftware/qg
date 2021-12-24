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

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$id = $_POST["id"];
$il = $_POST["il"];
$cinsiyet = $_POST["cinsiyet"];

// cinsiyet isminden cinsiyet idsini bulur
$cinsiyetBulSQL = "SELECT cinsiyetid FROM cinsiyet WHERE cinsiyet_isim='" . $cinsiyet . "'";
$result = $conn->query($cinsiyetBulSQL);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $cinsiyetid = $row["cinsiyetid"];
    }
} else {
    echo "0 results";
}

//il
$ilBulSQL = "SELECT il_id FROM iller WHERE il_ad='" . $il . "'";
$result = $conn->query($ilBulSQL);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $il_id = $row["il_id"];
    }
} else {
    echo "0 results";
}

$sql = "INSERT INTO oyuncular (id, ad, soyad, cinsiyet_id, il_id)
VALUES ('"  . $id . "', '" . $ad . "' , '" . $soyad . "' , '" . $cinsiyetid . "' , '" . $il_id . "')";
$conn->query($sql);

header('Location: index.php');
die();
