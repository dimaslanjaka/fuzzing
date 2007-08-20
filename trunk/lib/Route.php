<?php

require_once('abstract/RouteAbstract.php');

/**
 * The Route class
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
class Route extends RouteAbstract implements RouteInterface {

	protected $routes = array();
	
	/**
	 * Constructor validates rules and maps them
	 * 
	 * You might want to change the allowed tokens
	 * 
	 * @param array $routes
	 * @return object the route object
	 * @throws Exception
	 */
	public function __construct(array $routes) {
	
		foreach ($routes as $route) {
			$this->prepareRoute($route);
		}

		if(!empty($routes)) {
			return $this;
		} else {
			throw new Exception('No routes found');	
		}
	}
}

/**
 * Interface for the Route class
 *
 */
interface RouteInterface {
	
	/**
	 * Creates the route array if parameters are valid
	 *
	 * @param array the given routes
	 */
	public function __construct(array $routes);
	
	/**
	 * Must be present to read the route array
	 *
	 */
	public function getRoutes();
}