<?php

include_once('dribbble.php');

$username = 'tylergraf';

$d = new dribbble($username);

$result = $d->getShots();
$shots = $result['shots'];
?>