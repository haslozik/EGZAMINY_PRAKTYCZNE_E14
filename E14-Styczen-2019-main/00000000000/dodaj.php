<?php

    $conn = mysqli_connect('localhost','root','','dane');
    
    if(isset($_POST['submit'])) {
        $tytul = $_POST['tytul'];
        $gatunek = $_POST['gatunek'];
        $rok = $_POST['rok'];
        $ocena = $_POST['ocena'];

        $sql = "INSERT INTO filmy (tytul, gatunki_id, rok, ocena) VALUES ('".$tytul."', '".$gatunek."', '".$rok."', '".$ocena."')";
    
        $result = mysqli_query($conn,$sql);

        if($result) {
            echo "Film ".$tytul." został dodany do bazy";
        } else {
            echo "naura";
        }
    }

    mysqli_close($conn);
?>