<?php
include 'connessione.php'; // Include connessione al DB
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';

$sql = "SELECT id, nome, email FROM utenti"; // Query per selezionare utenti
$result = $conn->query($sql);

echo "<h2>Elenco Utenti</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Azioni</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>
                <a href='modifica_utente.php?id=" . $row['id'] . "'>Modifica</a> |
                <form style='display:inline;' method='post' action='elimina_utente.php' onsubmit='return confirm(\"Sei sicuro di eliminare questo utente?\");'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='submit' value='Elimina'>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nessun utente trovato.";
}

?>

<br>
<a href="inserisci_utente.php">Aggiungi nuovo utente</a>
