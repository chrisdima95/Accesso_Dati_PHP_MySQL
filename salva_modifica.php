<?php
include 'connessione.php';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';

if (isset($_POST['id'], $_POST['nome'], $_POST['email'])) {
    $id = (int) $_POST['id'];
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "UPDATE utenti SET nome='$nome', email='$email' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Utente aggiornato con successo.";
    } else {
        echo "Errore durante l'aggiornamento: " . $conn->error;
    }
} else {
    echo "Dati mancanti.";
}

?>

<br><a href="elenco_utenti.php">Torna all'elenco utenti</a>
