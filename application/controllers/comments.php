<?php

class Comments_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {

    }    

	public function post_index()
    {
        $comment = Comment::create(array(
            'body' => Input::get('comment'),
            'author_id' => Auth::user()->id,
            'code_id' => Input::get('code_id')
            ));
        dd($comment);
        return 'You are creating a comment';
    }    

	public function get_show()
    {

    }    

	public function get_edit()
    {

    }    

	public function get_new($code_slug)
    {
        $code = Code::where_slug($code_slug)->first();
       return View::make('comment.new')->with('code', $code);
    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}