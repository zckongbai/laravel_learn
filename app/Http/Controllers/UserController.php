<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function encrypt(Request $request)
    {
    	$word = $request->word;
    	$encrypted = Crypt::encryptString($word);
    	return $encrypted;
    }

    public function decrypt(Request $request)
    {
		$encrypted = $request->encrypted;
		$decrypted = Crypt::decryptString($encrypted);
		return $decrypted;
    }

    public function readNotifies(Request $request)
    {
        $user = User::find(1);

        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        // $user->unreadNotifications->markAsRead();
        echo "all unread notifies is read";
    }

}
