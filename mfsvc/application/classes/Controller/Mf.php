<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mf extends Controller {

	public function action_index()
	{	
		$jsonArray = array('one' => array('another'=>3), 'two' => 2, 'three' => 3);
		
		$this->response->body(json_encode($jsonArray));
	}

} // End Welcome
