<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="UTF-8">
    <title>Filmy</title>

    <link rel="stylesheet" href="styl1.css">

</head>
<body>
        
    <div id="boczny_panel">
        <h3>Dostępne gatunki filmu</h3>
        <ol>
            <li>Sci-Fi</li>
            <li>animacja</li>
            <li>dramat</li>
            <li>horror</li>
            <li>komedia</li>
        </ol>
        <a href="kadr.jpg">Pobierz obraz</a><br>
        <a href="repertuar-kin.pl" target="_blank">Sprawdź repertuar kin</a>
    </div>

    <div id="panel_prawo1">
        <h1>FILMOTEKA</h1>
    </div>
    <div id="panel_prawo2">
        <form action="dodaj.php" method="POST">
            Tytuł: <input type="text" name="tytul"><br>
            Gatunek filmu: <input type="text" name="gatunek"><br>
            Rok produkcji: <input type="text" name="rok"><br>
            Ocena: <input type="text" name="ocena"><br>
            <input type="reset" value="CZYŚĆ">
            <input type="submit" value="DODAJ" name="submit">
        </form>
    </div>
    <div id="panel_prawo3">
        <img src="kadr.jpg" alt="zdjęcia filmowe">
    </div>

    <div id="stopka">
        <p>Autor strony: 00000000000</p>
    </div>

</body>
</html>