<?php
include 'connessione.php';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';

if (isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO utenti (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === true) {
        echo "Utente aggiunto con successo.";
    } else {
        echo "Errore durante l'inserimento: " . $conn->error;
    }
} else {
    echo "Dati mancanti.";
}

?>

<br><a href="elenco_utenti.php">Torna all'elenco utenti</a>
