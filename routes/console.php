<?php

use Illuminate\Foundation\Inspiring;
use App\User;
use App\DripEmailer;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('email2:send {user}', function (DripEmailer $drip, $user) {
    $drip->send(User::find($user));
});