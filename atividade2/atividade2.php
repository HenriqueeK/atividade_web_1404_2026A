<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ( $numero != null && $numero % 2 == 0 ) {
        echo "Par!";
    } else {
        echo "Impar!!";
    }
}