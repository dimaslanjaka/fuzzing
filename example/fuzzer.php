<?php

# fetch the API
require_once('../lib/Api.php');

# define the routes
# currently allowed are W,D,P,M,B,O,V
$routes = array('MBPVBWD', 'POMVBPOBWD', 'BMVWODBM?P?VO', '??????????', '*');

# start {pha:zing}
$fuzzer = new Api($routes, '../elements/html.json');

# take a look at the results
echo $fuzzer;
