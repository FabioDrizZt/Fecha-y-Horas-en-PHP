<?php

$fecha_ahora = new DateTime();
$fecha = new DateTime('January 14, 2020');

echo '<br>';
echo $fecha_ahora->format('l, F j, Y g:i:s a') . '<br>';
echo $fecha->format('l, F j, Y H:i a') . '<br>';

$TiempoAhora = $fecha_ahora->getTimestamp();
$fecha->setTimestamp($TiempoAhora);

echo $fecha->format('l, F j, Y g:i a') . '<br>';
echo date('l, F j, Y g:i a', $fecha->getTimestamp());