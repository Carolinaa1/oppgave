<?php
//starter session
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>dodiok</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Hei, <?php echo $_SESSION['username']; ?> </h1>
    <?php
    //oprette kobling
    $kobling = new mysqli('localhost', 'root', 'root', 'termin1');

    //sjekk om koblingen fungerer 
    if($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }

    //angi utf-8 som tegnsett
    $kobling->set_charset("utf8");

    $sql = "SELECT * FROM produkt";
    $result = $kobling->query($sql);

    //skriver ut innhold i tabellen
    while($row = $result->fetch_assoc()) {
        $navn = $row["produktnavn"];
        $storrelse = $row["storrelse_gb"];
        $bilde = $row["bilde"];

        echo"<img src='bilde/$bilde' alt='Bilde av resident evil cover' width='100' height='120'>";
        echo "<div> $navn $bilde </div>";
  }

?>
    <a href="logout.php">Logg ut</a>
</body>
</html>

<?php
//sender deg tilbake til loggin siden
}
else {
    header("Location: index.php");
    exit();
}

?>