<?php

require_once('../lib/Api.php');

# allowed are W,D,P,M,B,O
$routes = array('MBPBWD', 'POMBPOBWD', 'BMWODBM?PO', '??????????', '*');
$fuzzer = new Api($routes, '../elements/html.json');

var_dump($fuzzer);
