<?php

/**
 * This class makes sure the IteratorIteraor is 
 * additionally extended to the Storage class
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com> 
 */
abstract class StorageAbstract extends IteratorIterator {

    /**
     * The loaded elements
     *
     * @var array
     */
    protected $elements = array();

    /**
     * The path to the element file
     *
     * @var string
     */
    protected $path = false;    
    
    /**
     * This methods extracts the elements forund in a 
     * JSON file and maps the result
     *
     * @return object this object
     * @throws Exception
     */
    protected function getElementsFromJSON() {
        if(extension_loaded('JSON')) {
            
            $json = file_get_contents($this->path);
            $this->elements = json_decode($json);
            
            if(!$this->elements) {
                throw new Exception('Invalid JSON provided');	
            }
            
        } else {
            throw new Exception('No JSON available');
        }
        
        return $this;
    }
	
    /**
     * Getter for the elements property
     *
     * @return object exJSON elements
     */
	public function getElements() {
		return $this->elements;
	}
}