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

    public function get_show($id)
    {
        //TODO: Validate EVERYTHING!
        //TODO: Check so that code really exists, if not, redirect
        $codes = Code::with(array('user', 'comments', 'comments.user'))->where_slug($id)->get();
        return View::make('code.show')->with(array('codes' => $codes));
    }   

    public function get_list() {
        //TODO: Make modular \/ for more sorting options
        $codes = Code::with(array('user', 'comments'))->order_by('created_at', 'DESC')->take(10)->get();
        return View::make('code.index')->with('codes', $codes);
    } 

	public function get_edit()
    {
        //TODO: Show form for editing code that you have, should possible save the change in seperate
    }    

	public function get_new()
    {
        //Show form for creating new code
        return View::make('code.new');
    }    

	public function put_update()
    {
        //TODO: Actual request for updating
    }    

	public function delete_destroy()
    {
        //TODO: Delete code
    }

}