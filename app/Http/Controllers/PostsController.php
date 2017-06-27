<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{

	public function index()

	{

		return view('posts.index');

	}

	public function create()

	{

		return view('posts.view');

	}

	public function store()

	{

		// // Create a new post using the requested data
		// $post = new Post;

		// $post->title = request('title');

		// $post->body = request('body');

		// // Save it to the database
		// $post->save();

		Post::create(request(array('title', 'body')));


		// Redirect to home page 
		return Redirect('/');


	}
	
	public function show()

	{

		return view('posts.show');

	}



}
