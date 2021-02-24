
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Le Juste Prix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <img alt="logo du juste prix" src="logo.jpg" />
    </header>
    <main>
        <img src="montre.jpg" alt="une belle montre de luxe" />
        <form action="guess.php" name="guess" method="post">




        <?php
$chiffrePropose = $_POST['guess'];

print("<center>Bonjour $prenom $nom</center>");
?>




            <div class="input-group">
                <label for="price">C'est combien ?</label>
                <span>$</span><input id="price" name="guess" />
            </div>
            <button type="submit">Valider</button>
        </form>
    </main>
</body>

</html>



