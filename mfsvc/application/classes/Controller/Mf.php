<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mf extends Controller 
{
	public function action_index()
	{
		$mf_array = array("Fund" => "Pinnacle","Qty" => 3400,"NAV" => 13.3,"Value" => 164000);
		$this->response->body(json_encode($mf_array))->headers('Content-Type', 'application/json');
	}
}
