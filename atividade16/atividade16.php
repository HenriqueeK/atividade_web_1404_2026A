<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorTotal = $_POST["valor_total"];
    $numPessoas = $_POST["pessoas"];

    echo "Total a pagar por pessoa: R$ " . $valorTotal / $numPessoas;
}