<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\QueuedTest;

class QueuedController extends Controller
{
    public function Test()
    {
    	$arr = [
    		'name' => 'zc',
    	];
    	$this->dispatch(new QueuedTest($arr));
    }

    public function connect()
    {
    	
    }
}
