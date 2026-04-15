<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medida = $_POST["medida"];

    echo $medida * 100 . " cm";
}