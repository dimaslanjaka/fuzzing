<?php

require_once('abstract/StorageAbstract.php');

/**
 * This is the Storage logic
 *
 */
class Storage extends StorageAbstract implements Iterator, StorageInterface {
	
	/**
	 * Checks for the element JSON and parses it
	 *
	 * @param string path to the JSON
	 */
	public function __construct($path) {

		if(file_exists($path)) {
			$this->path = $path;
			$this->getElementsFromJSON();
		} else {
			throw new Exception('Storage file doesn\'t exist');	
		}
	}
}

/**
 * Storage interface - only constructor and getter 
 * are accessible
 *
 */
interface StorageInterface {
	
	public function __construct($path);
	
	public function getElements();
}