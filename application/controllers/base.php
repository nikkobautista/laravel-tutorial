<?php

class Base_Controller extends Controller {

    public function __construct()
    {
        //Assets
        Asset::add('jquery', 'js/jquery-1.7.2.min.js');
        Asset::add('bootstrap-js', 'js/bootstrap.min.js');
        Asset::add('bootstrap-css', 'css/bootstrap.min.css');
        Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-css');
        Asset::add('style', 'css/style.css');
        parent::__construct();
    }
    
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
    
    public function logRequest()
    {
        $route = Request::route();
        Log::log('request', "Controller: {$route->controller} / Action: {$route->controller_action} called at ". date('Y-m-d H:i:s'));
    }
}