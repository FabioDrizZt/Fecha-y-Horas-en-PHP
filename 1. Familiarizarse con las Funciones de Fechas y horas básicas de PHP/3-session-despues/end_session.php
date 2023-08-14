<?php

$limite_de_tiempo_en_segundos = 3;

session_start();

if (!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit;
} elseif ($_SESSION['authenticated'] + $limite_de_tiempo_en_segundos < time()) {
    session_destroy();
    header('Location: login.php?expired=true');
    exit;
} else {
    $_SESSION['authenticated'] = time();
}