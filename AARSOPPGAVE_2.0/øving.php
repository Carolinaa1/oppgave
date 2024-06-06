<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
		//Tilkoblingsinformasjon
			$tjener = "localhost";
			$brukernavn = "root";
			$passord = "root";
			$database = "spill";

            //Opprette kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

//Sjekk om kobling virker
if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
}

//Angi UTF-8 som tegnsett
$kobling->set_charset("utf8");

$sql = "SELECT * FROM data_til_spill";

$resultat = $kobling->query($sql);

if (!$resultat) {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
} else {
    echo '<table><tr><th>Navn</th><th>Score</th></tr>';
    
    while ($rad = $resultat->fetch_assoc()) {
        $tittel = $rad["tittel"];
        $score = $rad["score"];
        echo '<tr><td>' . $tittel . '</td><td>' . $score . '</td></tr>';
    }
    echo '</table>';
}
    ?>




    <h1>Dette er php</h1>
</body>
</html>