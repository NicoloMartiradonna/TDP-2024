<?php
    $localita = $_POST['localita'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $rivelazione = $_POST['rivelazione'];
    $umidita = $_POST['umidita'];
    $clima = $_POST['clima'];
    $abitudine = $_POST['abitudine'];


    
    echo "Località: " . $localita . "<br>";
    echo "Data: " . $data . "<br>";
    echo "Ora: " . $ora . "<br>";
    echo "Tipo di rilevazione: " . $rivelazione . "<br>";
    echo "Umidità: " . $umidita . "<br>";
    echo "Clima attuale: " . $clima . "<br>";
    echo "Abitudine: " . $abitudine . "<br>";
}
?>