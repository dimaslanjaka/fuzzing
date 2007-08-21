<?php

require_once('abstract/FuzzerAbstract.php');

/**
 * Fuzzer class - is called by the API
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
class Fuzzer extends FuzzerAbstract implements FuzzerInterface  {

	/**
	 * Kick-starts fuzzing process
	 *
	 * @param Storage $storage
	 * @param Route $routes
	 * @return array the result
	 */
	public function __construct(Storage $storage, Route $routes) {
		
		$this->elements = $storage->getElements();
		$this->routes = $routes->getRoutes();
		
		return $this->startFuzzing();
	}

	/**
	 * This method validates the tokens and concatenates 
	 * the result fragments
	 *
	 * @param string $item
	 * @return string concatenated string
	 * @throws Exception
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
        } elseif($item == 'V') {
            return $this->getShuffled($this->elements->values, false);			
		} else {
			throw new Exception('Invalid route fragment');
		}
	}
	
	/**
	 * Use when needed
	 *
	 */
	public function __destruct() {
	
	}
}

/**
 * Fuzzer interface
 * 
 * Only interceptors and getters are public
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
interface FuzzerInterface {
	
	public function __construct(Storage $storage, Route $routes);
	
	public function getResult();
	
	public function __destruct();
}
