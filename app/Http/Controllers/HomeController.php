<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\OrderShipped;
use App\Jobs\SendReminderEmail;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function axios()
    {
        return view('home/axios');
    }

    public function orderShipped(User $user)
    {
        return event(new OrderShipped($user));
    }

    public function sendEmail()
    {
        $user = User::find(1);
        SendReminderEmail::dispatch($user)->onQueue('default');
        return ;
    }
}
