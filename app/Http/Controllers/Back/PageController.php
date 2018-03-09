<?php
namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\ {

    Http\Requests\PostRequest,

    Http\Controllers\Controller,

    
	Models\Page

   

};

class PageController extends Controller
{
   

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $repository
     */
    public function __construct()
    {
       
    }
	public function index()
    {
        
		$page=Page::all();
        return view('back.page.index')->with('pages',$page)->with('msg',null);
    }

    
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('back.page.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
	 protected function validator(array $data)
    {
        return Validator::make($data, [
            'slug' => 'required|string|max:255|unique:page',
            'title' => 'required|string|max:255',
            'body' => 'required',
            'active' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'seo_title' => 'required'
            
        ]);
    }
	 
	 
	 
    public function store(Request $request)
    {
		
		$data=array(
					'slug' =>Input::get('slug'),
					'title' =>Input::get('title'),           
					'body' =>Input::get('body'),					
					'meta_description' =>Input::get('meta_description'),
					'meta_keywords' =>Input::get('meta_keywords'),
					'seo_title' =>Input::get('seo_title')
					);
      $validator=  Validator::make($data, [
            'slug' => 'required|string|max:255|unique:page',
            'title' => 'required|string|max:255',
            'body' => 'required',
            
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'seo_title' => 'required'
            
        ]);;
		
	  if ($validator->fails())
		{
			$messages = $validator->messages();
			return redirect()->back()->withErrors($validator->errors())->withInput();
		}
		else{
			$page =new Page;
			$page->slug =Input::get('slug');
            $page->title =Input::get('title');
            $page->excerpt ='ex';
            $page->body =Input::get('body');
            $page-> active =Input::get('active')=='on'?1:0;
            $page-> meta_description =Input::get('meta_description');
            $page-> meta_keywords =Input::get('meta_keywords');
            $page-> seo_title =Input::get('seo_title');
		   $page-> user_id =9;
		   
		   $page->save();
		   return redirect()->action(
			'Back\PageController@index'
		);		   
		
    }
	}

    /**
     * Display the post.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $page=Page::FindOrFail($id);
		
		 return redirect('page/'.$page->slug);
		
    }

    /**
     * Show the form for editing the post.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        

       $page=Page::FindOrFail($id);

        return view('back.page.edit', compact('page'));
    }

    /**
     * Update the post in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

       
		$page = Page::FindOrFail($id);
			$page->slug =Input::get('slug');
            $page->title =Input::get('title');
            $page->excerpt ='ex';
            $page->body =Input::get('body');
            $page-> active =Input::get('active')=='on'?1:0;
            $page-> meta_description =Input::get('meta_description');
            $page-> meta_keywords =Input::get('meta_keywords');
            $page-> seo_title =Input::get('seo_title');
		   $page-> user_id =9;
		   
		   $page->save();
        return back()->with('page-ok', __('The page has been successfully updated'));
    }

    /**
     * Remove the post from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
		Page::destroy($id);
        

        return response ()->json ();
    }
}
