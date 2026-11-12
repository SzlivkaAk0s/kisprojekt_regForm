<?php

$nev = $_POST["nev"];
$loginnév = $_POST["loginnév"];
$jelszo = $_POST["jelszo"];
$szerepkor = $_POST["szerepkor"];
$auto = $_POST["auto"];
$pc = $_POST["pc"];
$mobil = $_POST["mobil"];
$email = $_POST["email"];


echo "<h1>Regisztráció adatai</h1>";

echo "Név: " . $nev . "<br>";
echo "Loginnév: " . $loginnév . "<br>";
echo "Jelszó: " . $jelszo . "<br>";
echo "Szerepkör: " . $szerepkor . "<br>";

echo "Autó: ";

if ($auto == 1) {
    echo "Van";
} else {
    echo "Nincs";
}

echo "<br>";

echo "PC: ";

if ($pc == 1) {
    echo "Van";
} else {
    echo "Nincs";
}

echo "<br>";

echo "Mobil: " . $mobil . "<br>";
echo "Email: " . $email . "<br>";


$kapcsolat = mysqli_connect(
    "192.168.10.20",
    "root",
    "root",
    "kisprojekt"
);


if (!$kapcsolat) {
    die("Nem sikerült kapcsolódni az adatbázishoz!");
}


$sql = "INSERT INTO reg
        (nev, loginnév, jelszo, szerepkor, auto, pc, mobil, email)
        VALUES
        ('$nev', '$loginnév', '$jelszo', '$szerepkor', '$auto', '$pc', '$mobil', '$email')";


if (mysqli_query($kapcsolat, $sql)) {
    echo "<br><br>Sikeres adatbázis mentés!";
} else {
    echo "<br><br>Adatbázis hiba: " . mysqli_error($kapcsolat);
}


mysqli_close($kapcsolat);


?>