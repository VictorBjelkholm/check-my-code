<?php

class Codes_Controller extends Base_Controller {

	public $restful = true;    

    //TODO: Function in case code is to long and "See full code" is needed
    
	public function get_index()
    {
        //TODO: Get all codes available
        //TODO: Different modes for viewing
        return Redirect::to_route('list_codes');
    }    


	public function post_index()
    {
        //TODO: Validate all!
        $code = new Code;
        //TODO: Limit on title
        $code->title = Input::get('title');
        $code->slug = Str::slug(Input::get('title'));
        $code->content = htmlentities( Input::get('content') );
        $code->syntax = Input::get('syntax', 'None');
        $code->user_id = Auth::user()->id;
        $code->save();
        //TODO: Show message for success or fail
        return Redirect::to_route('show_code', $code->slug);
    }    

    public function get_show($user, $id)
    {
        //TODO: Validate EVERYTHING!
        //TODO: Check so that code really exists, if not, redirect
        $user = User::where_username($user)->first();
        $codes = Code::with(array('comments', 'comments.user'))->where_slug_and_user_id($id, $user->id)->get();
        return View::make('code.show')->with(array('codes' => $codes));
    }   

    public function get_list() {
        //TODO: Make modular \/ for more sorting options
        $codes = Code::with(array('user', 'comments'))->order_by('created_at', 'DESC')->take(10)->get();
        return View::make('code.index')->with('codes', $codes);
    } 

    public function get_fork($codeSlug) {
        $code = Code::where_slug($codeSlug)->first();
        return View::make('code.new')->with('code', $code);
    }

    public function get_edit($codeSlug)
    {
        $code = Code::where_slug($codeSlug)->first();
        //TODO: Show form for editing code that you have, should possible save the change in seperate
        return View::make('code.edit')->with('code', $code);
    }    

	public function get_new()
    {
        //Show form for creating new code
        return View::make('code.new');
    }    

	public function put_update()
    {
        //TODO: Actual request for updating
        $codeId = Input::get('codeId');
        $code = Code::find($codeId);
        $code->title = Input::get('title');
        $code->slug = Str::slug(Input::get('title'));
        $code->content = Input::get('content');
        $code->syntax = Input::get('syntax');
        $code->save();
        return Redirect::to_route('show_code', $code->slug);
    }    

	public function delete_destroy()
    {
        //TODO: Delete code
    }

}