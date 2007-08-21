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
	
	/**
	 * This method manages the PDO connect and result processing
	 *
	 * @param Api $api
	 * @param unknown_type $connect
	 */
    public static function pdoExecute(Api $api, $connect = null) {
    		
    }
	
    /**
     * This method manages the shell connect and result processing
     *
     * @param Api $api
     * @param unknown_type $connect
     */
    public static function shellExecute(Api $api, $connect = null) {
    	
    }
    
    /**
     * This method manages the spidermonkey connect and result processing
     *
     * @param Api $api
     * @param unknown_type $connect
     */
    public static function spidermonkeyExecute(Api $api, $connect = null) {
    	
    }
    
    /**
     * This method just wraps the input into html tags
     *
     * @param Api $api
     * @param unknown_type $connect
     * @return unknown
     */
    public static function htmlWrapper(Api $api, $connect = null) {
        
    	return '<html>' . $api . '</html>';    	
    }
    
    /**
     * This method just wraps the input into script tags
     *
     * @param Api $api
     * @param unknown_type $connect
     * @return unknown
     */
    public static function scriptWrapper(Api $api, $connect = null) {

    	return '<script>' . $api . '</script>';
    }
    
    /**
     * This function is capable to store certain states of the plugin 
     * and return the gathered information
     *
     * @param integer $index
     * @param string $value
     * @param Api $api
     */
    protected function report($index, $value, Api $api) {

    	return $report;
    }
}