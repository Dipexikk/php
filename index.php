<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma</title>

</head>

<body>
    <?php include "components/header.php" ?>
    <h1>LOW PETR BREIT JE NEJVĚTŠÍ SIGMA</h1>

    <?php


$servername = "localhost"; // Server MySQL
$username = "root"; // Výchozí uživatel (změň podle potřeby)
$password = "root"; // Výchozí heslo (u XAMPP prázdné)
$dbname = "sigma"; // Název databáze

// Připojení k MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}





$sql = "SELECT * FROM matro";
$vysledek = $conn->query($sql);

if ($vysledek->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Název</th><th>Cena za kus</th><th>Počet kusů</th></tr>";
    while ($radek = $vysledek->fetch_assoc()) {
        echo "<tr><td>" . 
            $radek["ID"] . "</td><td>" . 
            $radek["Název"] . "</td><td>" . 
            $radek["Cena_za_kus"] . "</td><td>" . 
            $radek["Pocet_kusu"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Žádná data v tabulce.";
}

$conn->close();
?>



</body>
</html>

