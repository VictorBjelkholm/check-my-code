<?php

class Comments_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        //TODO: View latest comments, allow sorting options in future
    }    

	public function post_index()
    {
        $comment = Comment::create(array(
            'body' => Input::get('comment'),
            'user_id' => Auth::user()->id,
            'code_id' => Input::get('code_id')
            ));
        $code = Code::where('id', '=', Input::get('code_id'))->first();
        return Redirect::to_route('show_code', array($code->slug));
    }    

	public function get_show()
    {
        //TODO: Show individual comment
    }    

	public function get_edit()
    {
        //TODO: Show form for editing comment
    }    

	public function get_new($code_slug)
    {
        $code = Code::where_slug($code_slug)->first();
       return View::make('comment.new')->with('code', $code);
    }    

	public function put_update()
    {
        //TODO: handling put request for editing comment
    }    

	public function delete_destroy()
    {
        //TODO: deleting the comment
    }

}