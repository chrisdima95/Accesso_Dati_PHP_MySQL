<?php
include 'connessione.php';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';

if (!isset($_GET['id'])) {
    die("ID utente mancante.");
}

$id = (int) $_GET['id'];

$sql = "SELECT nome, email FROM utenti WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Utente non trovato.");
}

$row = $result->fetch_assoc();
?>

<form method="post" action="salva_modifica.php">
    <h2>Modifica Utente</h2>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
    <input type="submit" value="Aggiorna">
</form>

<br><a href="elenco_utenti.php">Torna all'elenco utenti</a>
