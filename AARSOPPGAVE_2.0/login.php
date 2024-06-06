<?php
session_start();
include "db_connect.php";

// && betyr ___ og ___
if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
// dette gjør at valuen til variablen er det samme som i formen
$brukernavn = validate($_POST['brukernavn']);
$passord = validate($_POST['passord']);

//sender feil meldinger hvis koden er tom

if(empty($brukernavn)) {
    header ("Location: index.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: index.php?error=Password is required!");
    exit();
}

//ser om brukernavn og passord finnes i database

$sql = "SELECT * FROM users WHERE username='$brukernavn' AND password='$passord'"; 

$result = mysqli_query($conn, $sql);


//lager en session hvis brukernavn og passord er riktig

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $brukernavn && $row['password'] === $passord) {
        echo "Innlogget";
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Ugyldig brukernavn eller passord!");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}

?>