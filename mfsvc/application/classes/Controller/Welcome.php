<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{	
		$jsonArray = array('one', 'two', 'three');
		
		$this->response->body(json_encode($jsonArray));
	}

} // End Welcome
