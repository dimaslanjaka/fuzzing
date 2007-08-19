<?php

class Fuzzer implements FuzzerInterface  {

	public function __construct(Storage $storage, Route $routes) {
		
		var_dump($storage);
		var_dump($routes);
		
	}

	protected function startFuzzing() {
	
	}
	
	protected function fuzzLinebreaks() {
	
	}

	protected function fuzzDelimiter() {
	
	}	
	
	protected function fuzzParameters() {
	
	}
	
	protected function fuzzMethods() {
	
	}	
	
	protected function fuzzParenthesis() {
	
	}	
	
	public function __destruct() {
	
	}
}

/**
 *
 */
interface FuzzerInterface {
}
