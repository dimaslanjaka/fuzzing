<?php

/**
 *  The method pool needed by most Fuzzer instances
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
abstract class FuzzerAbstract {

    /**
     * Element storage
     *
     * @var array
     */
    protected $elements = array();
    
    /**
     * Route storage
     *
     * @var array
     */
    protected $routes = array();
    
    /**
     * The results - oh my!
     *
     * @var array
     */
    protected $result = array();	
	
    /**
     * Starts the fuzzing process
     *
     * @return object this object
     */
    protected function startFuzzing() {

    	$result = null;
        foreach($this->routes as $route) {
            
            foreach($route as $item) {
                
                $result .= $this->concatenateResult($item); 
            }
            $this->result[] = $result;
            $result = null;
        }
        
        return $this->result;
    }
	
	/**
	 * Validates elements and concatenates the results
	 *
	 * @param string A single result fragment
	 */
	protected abstract function concatenateResult($item);
	
    /**
     * Returns the shuffled results
     *
     * @param object exJSON elements
     * @param boolean total random
     * @return string shuffled result
     */
    protected function getShuffled($elements, $random = false) {
        
        # create controlled string - option: BDMOPW
        if(is_array($elements)) {

            shuffle($elements);
            return $elements[0];
        } else {

            $pool = array();

            # create totally chaotic string - option: *
            if($random) {
                foreach($elements as $element) {
                    $pool = array_merge($element, $pool);
                }
                $random = null;
                $counter = rand(0,500);
                while($counter != 0) {
                    shuffle($pool);
                    $random .= $pool[0];
                    $counter--;    
                }
                return $random;
            } 
            # create contolled chaotic string - option: ?
            else {
                foreach($elements as $element) {
                    shuffle($element);    
                    $pool[] = $element[0];
                }
            }

            shuffle($pool);
            return $pool[0];
        }
    }


    /**
     * Getter for the results
     *
     * @return array
     */
    public function getResult() {
        
        return $this->result;
    }
}