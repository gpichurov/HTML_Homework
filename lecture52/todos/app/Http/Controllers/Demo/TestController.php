<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function test() 
    {
		return ['TestController'];
	}
}
