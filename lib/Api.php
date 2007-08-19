<?php

require_once('abstract/ApiAbstract.php');

/**
 * Enter description here...
 *
 */
class Api extends ApiAbstract implements ApiInterface {

	/**
	 * Enter description here...
	 *
	 * @var unknown_type
	 */
	protected $routes;

	public $results = array();
	
	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function __construct(array $routes, $storage) {
		if(!empty($routes) && !empty($storage)){
			
			$this->routes = $routes;
			$this->storage = $storage;
			
			$this->results =  $this->initFuzzing();
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
		$storage = new Storage($this->storage);
		$fuzzer = new Fuzzer($storage, $routes);
		
		return $fuzzer->getResult();
	}
	
	/**
	 * 
	 */
	public function __destruct() {
		
	}
}

/**
 * Enter description here...
 *
 */
interface ApiInterface {
	
	public function __construct(array $routes, $storage);
	
	public function __destruct();

}