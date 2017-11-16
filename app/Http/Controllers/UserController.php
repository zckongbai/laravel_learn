<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    function encrypt(Request $request)
    {
    	$word = $request->word;
    	$encrypted = Crypt::encryptString($word);
    	return $encrypted;
    }

    function decrypt(Request $request)
    {
		$encrypted = $request->encrypted;
		$decrypted = Crypt::decryptString($encrypted);
		return $decrypted;
    }
}
