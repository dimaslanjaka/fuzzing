<?php
/**
 * Basic API for the MetaFuzzer
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */

require_once('abstract/ApiAbstract.php');

/**
 * This class is the Fuzzing API
 *
 */
class Api extends ApiAbstract implements ApiInterface {

	/**
	 * Kick-starter for the fuzzing API
	 *
	 * @return array the results
	 */
	public function __construct(array $routes, $storage) {
		if(!empty($routes) && !empty($storage)){
			
			$this->routes = $routes;
			$this->storage = $storage;
			
			$this->results =  $this->initFuzzing();
		}
	}

    /**
     * Method to initialize the fuzzing process
     *
     * Call this function like
     * $fuzzer = new Api($routes, 'path/to/?.json');
     * 
     * @return array the fuzzing results
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
	 * Use when needed 
	 */
	public function __destruct() {
		
	}
}

/**
 * Interface for the Fuzzing API
 * 
 * Since the class logic is self executing after 
 * instantiation no more is needed
 */
interface ApiInterface {
	
	public function __construct(array $routes, $storage);
	
	public function __destruct();

}