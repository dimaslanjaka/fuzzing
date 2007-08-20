<?php

/**
 * All abstract logic for the API class
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
abstract class ApiAbstract extends IteratorIterator implements Iterator {
	
    /**
     * Route storage
     *
     * @var array
     */
    protected $routes = array();

    /**
     * Result storage    
     *
     * @var array
     */
    protected $results = array();
	
	/**
	 * Getter for the result object
	 *
	 * @return object
	 */
	public function getResults() {
		return $this->results;
	}
	
	/**
	 * __toString
	 * 
	 * lets you echo the result object
	 */
    public function __toString($string = '') {
        
    	foreach($this->results as $value) {
            $string .= $value . "\n\r";
        }

        return $string;
    }
}