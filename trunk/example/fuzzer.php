<?php

# fetch the API and the plugin(s)
require_once('../lib/Api.php');
require_once('../lib/plugins/Launchpad/Launchpad.php');
# Some HTML Fuzzing
# define the routes
# currently allowed are W,D,P,M,B,O,V
$routes = array('MBPVBWD', 
                'POMVBPOBWD', 
                'BMVWODBM?P?VO', 
                '??????????', 
                '*');
# start {pha:zing}
$fuzzer = new Api($routes, '../elements/html.json');
# take a look at the results
echo Launchpad::htmlWrapper($fuzzer);



# Some Javascript Fuzzing
# define the routes
# currently allowed are W,D,P,M,B,O,V
$routes = array('MB**VBWD', 
                'POM????WD', 
                'BMVWODBVO', 
                '*');
# start {pha:zing}
$fuzzer = new Api($routes, '../elements/javascript.json');
# take a look at the results
echo Launchpad::scriptWrapper($fuzzer);  
# we can use the Launchpad plugin soon to pass the output to spidermonkey