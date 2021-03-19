<?php


namespace App\Controllers;

use App\Controllers\BaseController;

@header('Content-Type: application/json');
class Ajax extends BaseController
{
	public function index()
	{
		$out['response'] = 'Index';
		$out['status'] = 200;
		$out['msg'] = 'Ajax Response API';

		echo json_encode($out,JSON_PRETTY_PRINT);exit();
	} 
}
