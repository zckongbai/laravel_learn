<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    //

	public function create()
	{
		return view('post.create');
	}

	// public function store(Request $request)
	// {
	// 	$this->validate($request, [
	//         'title' => 'required|unique:posts|max:255',
	//         'body' => 'required',
	//     ]);

	// }

	public function store(StoreBlogPost $request)
	{
		
	}



}
