<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    echo "Nome do produto: $nome <br>";
    echo "Preço do produto: $preco <br>";
}