<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = ($_POST["nascimento"] - 2026) * -1;
    $maiorDeIdade = $idade > 18;

    echo "$idade anos de idade. " . ($maiorDeIdade ? "Maior de idade" : "Menor de idade") . "!";
}