<?php

require_once('abstract/ApiAbstract.php');

/**
 * Enter description here...
 *
 */
class FuzzingApi extends ApiAbstract implements ApiInterface {

	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function __construct() {
		
		$this->initFuzzing();
		return $this->results;
	}
	
	/**
	 * Enter description here...
	 *
	 */
	protected function initFuzzing() {
	
		require_once 'Fuzzer.php';
	}
	
	/**
	 * 
	 */
	public function __destruct() {
		
	}
}



/**
 *
 */
interface ApiInterface {
	
	public function __construct();
	
	public function __destruct();

}