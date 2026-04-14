<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST["preco"];

    echo round($preco * 1.15, 2);
}