<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo round($numero / 4.98, 2);
}