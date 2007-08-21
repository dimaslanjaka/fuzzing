<?php

/**
 * Launchpad plugin
 * 
 * Provides static methods to collect results from 
 * various sources (DBMS, Console, Spidermonkey)
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @subpackage Plugins
 * @author <mario.heiderich@gmail.com>
 */
class Launchpad {
	
    public static function pdoExecute(Api $api, $connect = null) {
    		
    }
	
    public static function shellExecute(Api $api, $connect = null) {
    	
    }
    
    public static function spidermonkeyExecute(Api $api, $connect = null) {
    	
    }
    
    public static function htmlWrapper(Api $api, $connect = null) {
        
    	return '<html>' . $api . '</html>';    	
    }
    
    public static function scriptWrapper(Api $api, $connect = null) {

    	return '<script>' . $api . '</script>';
    }
    
}