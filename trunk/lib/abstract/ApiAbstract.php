<?php

/**
 *
 */
abstract class ApiAbstract {
	
	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $results;
	
	/**
	 * Enter description here...
	 *
	 */
	abstract protected function initFuzzing();
	
	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function getResults() {
		return $this->results;
	}
}