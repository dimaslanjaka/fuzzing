<?php

require_once('../lib/Api.php');

# allowed are L,D,P,M,B,O
$routes = array('MBPBLD', 'POMBPOBLD');
$fuzzer = new FuzzingApi($routes);
