<?php
include 'connessione.php';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    $sql = "DELETE FROM utenti WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Utente eliminato con successo.";
    } else {
        echo "Errore durante l'eliminazione: " . $conn->error;
    }
} else {
    echo "ID utente mancante.";
}

?>

<br><a href="elenco_utenti.php">Torna all'elenco utenti</a>
