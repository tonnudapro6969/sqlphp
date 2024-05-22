<?php
$parool = 'tonis';
$sool = 'taiestisuvalinetekst';
$kryp = crypt($parool, $sool);
echo $kryp;
?>