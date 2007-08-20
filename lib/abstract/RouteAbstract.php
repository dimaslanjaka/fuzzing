<?php

/**
 * All abstract logic for the Route class
 * 
 * @name MetaFuzzer {pha:zing}
 * @package Fuzzing
 * @author <mario.heiderich@gmail.com>
 */
abstract class RouteAbstract {

    /**
     * Returns the route array
     *
     * @return array the routes
     */
    public function getRoutes() {
        
        return $this->routes;   
    }	
    
    /**
     * Route string is splitted to an array
     *
     * @param array $route
     */
    protected function prepareRoute($route) {
        
        $route = str_split($route);
        $this->routes[] = $route;
    }
}