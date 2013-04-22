<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twig extends Controller {

	public function action_index()
	{
		$twig = Twig::factory('test');
		$twig->name = array(
			'first' => 'Tom',
			'last' => 'McDonald',
		);
		$this->response->body($twig);
	}

} // End Test
