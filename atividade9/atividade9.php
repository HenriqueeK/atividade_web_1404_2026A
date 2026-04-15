<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];
    $base = $_POST["base"];

    echo round($altura * $base, 2);
}