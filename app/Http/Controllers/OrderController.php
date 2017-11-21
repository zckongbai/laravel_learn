<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    function ship(Request $request, $userId)
    {
    	$user = User::find($userId);
    	// Mail::to($request->user())->send(new OrderShipped($user));
    	Mail::to($request->user())->queue(new OrderShipped($user));
    	return ;
    }
}
