<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>

    <link rel="stylesheet" href="styl.css">

</head>
<body>

    <div id="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>

    <div id="blok_lewy">
        <h3>Promocja 15% obejmuje artykuły:</h3>
        <ul>
            <?php
                $conn = mysqli_connect('localhost','root','','sklep');
                
                $sql = "SELECT nazwa FROM `towary` WHERE promocja = 1";

                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_row($result)) {
                    echo "<li>".$row[0]."</li>";
                }
                
            ?>
        </ul>
    </div>
    <div id="blok_srodkowy">
        <h3>Cena wybranego artykułu w promocji</h3>
        <form action="index.php" method="post">
            <select name="nazwa">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60szt.">Pisaki 60szt.</option>
                <option value="Markery 4szt.">Markery 4szt.</option>
            </select>
            <input type="submit" name="submit" value="WYBIERZ">
        </form>
            <?php
                if(isset($_POST['nazwa'])) {
                    $sql = "SELECT cena FROM `towary` WHERE nazwa = '".$_POST['nazwa']."'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($result);
                        echo round($row[0]*0.85,2);
                }
            ?>
    </div>
    <div id="blok_prawy">
        <h3>Kontakt</h3>
        <p>telefon: 123123123 <br>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja2.png" alt="promocja">
    </div>

    <div id="stopka">
        <h4>Autor strony 00000000000</h4>
    </div>
    
</body>
</html>