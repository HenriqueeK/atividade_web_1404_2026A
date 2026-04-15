<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST["preco"];

    echo "R$ " . round($preco * 0.9, 2);
}