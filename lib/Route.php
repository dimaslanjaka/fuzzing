<?php

class Route implements RouteInterface {

	protected $routes = array();
	
	public function __construct(array $routes) {
	
		# allowed are L,D,P,M,B,O
		foreach ($routes as $route) {
			if(!preg_match('/[^WDPMBO*?]/ism', $route)) {
				$this->prepareRoute($route);
			}
			
		}
		if(!empty($routes)) {
			return $this;
		} else {
			throw new Exception('No routes found');	
		}
	}

	protected function prepareRoute($route) {
		
		$route = str_split($route);
		$this->routes[] = $route;
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