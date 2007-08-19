<?php

class Route implements RouteInterface {

	protected $routes = array();
	
	public function __construct(array $routes) {
	
		# allowed are L,D,P,M,B,O
		foreach ($routes as $route) {
			if(!preg_match('/[^LDPMBO]/ism', $route)) {
				$this->routes[] = $route;
			}
			
		}
		if(!empty($routes)) {
			return $this;
		} else {
			throw new Exception('No routes found');	
		}
	}
	
	public function getRoutes() {
		
		return $this->routes;	
	}
}

/**
 *
 */
interface RouteInterface {
}