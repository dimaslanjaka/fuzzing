<?php

/**
 * Enter description here...
 *
 */
class Fuzzer implements FuzzerInterface  {

	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $elements = array();
	
	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $routes = array();
	
	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $result = array();
	
	/**
	 * Enter description here...
	 *
	 * @param Storage $storage
	 * @param Route $routes
	 * @return unknown
	 */
	public function __construct(Storage $storage, Route $routes) {
		
		$this->elements = $storage->getElements();
		$this->routes = $routes->getRoutes();
		
		return $this->startFuzzing();
	}

	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	protected function startFuzzing() {

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
	 * Enter description here...
	 *
	 * @param unknown_type $item
	 * @return unknown
	 */
	protected function concatenateResult($item) {

		if($item == '?'){
			return $this->getShuffled($this->elements, false);		
		} elseif($item == '*'){
            return $this->getShuffled($this->elements, true);     
        } elseif($item == 'P'){
			return $this->getShuffled($this->elements->properties, false);	
		} elseif($item == 'M') {
			return $this->getShuffled($this->elements->methods, false);
		} elseif($item == 'O') {
			return $this->getShuffled($this->elements->operators, false);
		} elseif($item == 'B') {
			return $this->getShuffled($this->elements->parenthesis, false);
		} elseif($item == 'W') {
			return $this->getShuffled($this->elements->whitespace, false);
		} elseif($item == 'D') {
			return $this->getShuffled($this->elements->delimiters, false);
		} else {
			throw new Exception('Invalid route fragment');
		}
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $elements
	 * @return unknown
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
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function getResult() {
		
		return $this->result;
	}
	
	/**
	 * Enter description here...
	 *
	 */
	public function __destruct() {
	
	}
}

/**
 * Enter description here...
 *
 */
interface FuzzerInterface {
}
