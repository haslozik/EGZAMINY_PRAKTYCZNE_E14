<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>

    <link rel="stylesheet" href="styl8.css">

</head>
<body>
    
    <div id="menu">
        <a href="index.php">
            Główna
        </a>
        <a href="procesory.html">
            Procesory
        </a>
        <a href="ram.html">
            RAM
        </a>
        <a href="grafika.html">
            Grafika
        </a>
    </div>
    <div id="logo">
        <h2>Podzespoły komputerowe</h2>
    </div>
    <div id="glowny">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PRODUCENTA</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
            <?php
                $con = mysqli_connect("localhost", "root", "", "sklep");
                $sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000";
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["nazwa"]."</td>";
                    echo "<td>".$row["opis"]."</td>";
                    echo "<td>".$row["cena"]."</td>";
                    echo "</tr>";
                }
                mysqli_close($con);
            ?>
        </table>
    </div>
    <div class="stopka">
        <img src="scalak.jpg" alt="promocje na procesory">
    </div>
    <div class="stopka">
        <h4>Nasz Sklep Komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
    </div>
    <div class="stopka">
        <p>zadzwoń: 601 602 603</p>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>

</body>
</html>