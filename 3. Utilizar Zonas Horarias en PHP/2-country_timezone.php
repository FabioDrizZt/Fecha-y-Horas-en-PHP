<?php
echo '<pre>';

$ident_pais = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'US');

echo 'Se encontraron todos estos identificadores: ' . count($ident_pais);
print_r($ident_pais);