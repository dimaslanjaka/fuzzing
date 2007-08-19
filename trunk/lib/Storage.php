<?php

class Storage {
	
	protected $path = false;
	
	protected $elements = array();
	
	public function __construct($path) {

		if(file_exists($path)) {
			$this->path = $path;
			$this->getElementsFromJSON();
		} else {
			throw new Exception('Storage file doesn\'t exist');	
		}
	}
	
	protected function getElementsFromJSON() {
		if(extension_loaded('JSON')) {
			// fetch storage
			
			$json = file_get_contents($this->path);
			$this->elements = json_decode($json);
		} else {
			throw new Exception('No JSON available');
		}
		
		return $this;
	}
}


/**
 *
 */
interface StorageInterface {
}