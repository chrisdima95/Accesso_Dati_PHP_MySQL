<?php include 'includes/header.php'; ?>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "scuola";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo "<div class='error-message'>Connessione fallita: " . $conn->connect_error . "</div>";
} else {
    echo "<div class='success-message'>Connessione al database riuscita!</div>";
}
?>
</main>
<?php include 'includes/footer.php'; ?>
