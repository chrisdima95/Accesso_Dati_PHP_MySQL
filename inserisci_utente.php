<form method="post" action="salva_utente.php">
    <h2>Aggiungi Nuovo Utente</h2>
    Nome: <input type="text" name="nome" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Salva">
</form>

<br><a href="elenco_utenti.php">Torna all'elenco utenti</a>

<?php
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/footer.php';
