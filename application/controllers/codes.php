<?php

class Codes_Controller extends Base_Controller {

	public $restful = true;    

    
    
	public function get_index()
    {
        //Get all codes (code/all)
    }    

	public function post_index()
    {
        $code = new Code;
        $code->title = Input::get('title');
        $code->slug = Str::slug(Input::get('title'));
        $code->content = htmlentities( Input::get('content') );
        $code->syntax = Input::get('syntax', 'None');
        $code->author_id = Auth::user()->id;
        $code->save();
        return Redirect::to_route('show_code', $code->id);
    }    

    public function get_show($id)
    {
        //TODO: Validate EVERYTHING!
        $id = $id;
        $code = Code::where('slug', '=', $id)->first();
        $comments = Comment::where('code_id', '=', $code->id)->get();
        $
        return View::make('code.show')->with(array('code' => $code, 'comments' => $comments));
    }   

    public function get_list() {
        $codes = Code::order_by('created_at', 'DESC')->take(10)->get();
        return View::make('code.index')->with('codes', $codes);
    } 

	public function get_edit()
    {
        //Show form for editing code that you have, should possible save the change
    }    

	public function get_new()
    {
        //Show form for creating new code
        //dd(Auth::user());
        return View::make('code.new');
    }    

	public function put_update()
    {
        //Actual request for updating
    }    

	public function delete_destroy()
    {
        //Delete code
    }

}