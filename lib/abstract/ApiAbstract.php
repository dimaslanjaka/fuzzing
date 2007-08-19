<?php

/**
 *
 */
abstract class ApiAbstract {
	
	protected $results;
	
	abstract protected function initFuzzing();
	
	public function getResults() {
		return $this->results;
	}
}
?>