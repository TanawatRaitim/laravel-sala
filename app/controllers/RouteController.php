<?php

class RouteController extends BaseController {

	public function getIndex()
	{
		// return 'Route2';
		return View::make('routes.route1');
	}
	

}
