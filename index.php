<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid text-center mt-3">
        <h1>È Palindroma?</h1>

        <form method="get" action="">
            <label for="stringInput">Inserisci una parola per verificare se è palindroma</label>
            <input type="text" id="stringInput" name="stringInput" placeholder="Inserisci una parola" required>
            <input type="submit" value="Invia" class="btn btn-primary mt-3">
        </form>

        <?php
        // Verifica se il form è stato inviato
        if (isset($_GET['stringInput'])) {
            $parolaInserita = $_GET['stringInput'];

            // Chiama la funzione per verificare se è palindroma
            if (isPalindroma($parolaInserita)) {
                // Creo i paragrafi da inserire in pagina per visualizzare i risultati
                echo "<p class='mt-4 text-success'>La parola <strong>'" . ($parolaInserita) . "'</strong> è palindroma!</p>";
            } else {
                echo "<p class='mt-4 text-danger'>La parola <strong>'" . ($parolaInserita) . "'</strong> non è palindroma.</p>";
            }
        }
        ?>
    </div>

</body>

</html>