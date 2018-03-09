<?php

namespace App\Http\Controllers\Front;

use App\ {
    Http\Controllers\Controller,    
    Models\Page
};
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * The PostRepository instance.
     *
     * @var \App\Repositories\PostRepository
     */
   

    /**
     * The pagination number.
     *
     * @var int
     */
   

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $postRepository
     * @return void
    */
   

    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    

    
    public function show($slug)
    {
       
		$page=Page::where('slug',$slug)->get();
		
		
		
		 return view('page')->with('page',$page);	
		
    }

    
    
}
