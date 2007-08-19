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
	 * @var unknown_type
	 */
	protected $routes;
	
	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function __construct(array $routes) {
		if(!empty($routes)){
			$this->routes = $routes;	

			$this->initFuzzing();
		}
	}
	
	/**
	 * Enter description here...
	 *
	 */
	protected function initFuzzing() {
	
		require_once 'Fuzzer.php';
		require_once 'Storage.php';
		require_once 'Route.php';
		
		$routes = new Route($this->routes);
		$fuzzer = new Fuzzer($routes);

		return $this->results;
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
	
	public function __construct(array $routes);
	
	public function __destruct();

}