<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo ($numero < 0 ? "Negativo" : ($numero == 0 ? "Zero" : "Positivo"));
}