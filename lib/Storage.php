<?php

/**
 * Enter description here...
 *
 */
class Storage extends IteratorIterator implements Iterator {
	
	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $path = false;
	
	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $elements = array();
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $path
	 */
	public function __construct($path) {

		if(file_exists($path)) {
			$this->path = $path;
			$this->getElementsFromJSON();
		} else {
			throw new Exception('Storage file doesn\'t exist');	
		}
	}
	
	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	protected function getElementsFromJSON() {
		if(extension_loaded('JSON')) {
			
			$json = file_get_contents($this->path);
			$this->elements = json_decode($json);
		} else {
			throw new Exception('No JSON available');
		}
		
		return $this;
	}
	
	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function getElements() {
		
		return $this->elements;
	}
}