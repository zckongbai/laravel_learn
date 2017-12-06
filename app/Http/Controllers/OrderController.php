<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\InvoicePaid;
use Log;

class OrderController extends Controller
{
    public function ship(Request $request, $userId)
    {
    	$user = User::find($userId);
    	// Mail::to($request->user())->send(new OrderShipped($user));
    	Mail::to($request->user())->queue(new OrderShipped($user));
    	return ;
    }

    public function notify(Request $Request, $userId)
    {
    	$user = User::find($userId);
    	$res = $user->notify(new InvoicePaid($user));
    	Log::info('res:' . $res);
    	return ;
    }
}
