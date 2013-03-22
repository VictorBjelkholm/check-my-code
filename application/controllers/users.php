<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        //TODO: Show all users
    }    

	public function post_index()
    {
        //TODO: Validate and also echo outcome
        if( User::where_username(Input::get('username'))->first() ) {
            return 'Username already exists!';
        } else {
            //actual submit
            $user = User::create(array(
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password')),
                    'name' => Input::get('name'),
                    'email' => Input::get('email'),
                    'bio' => Input::get('bio')
                ));
            if($user) {
                Auth::login($user->id);
                return Redirect::to_route('homepage');
            } else {
                return 'Couldn\'t log you in...';
            }
        }
    }    

	public function get_show($username)
    {
        //TODO: Validate that user actually exists
        $user = User::where_username($username)->first();
        $codes = User::find($user->id)->codes;
        return View::make('user.show')->with(array('user' => $user, 'codes' => $codes));
    }

    public function get_login(){
        //TODO: make the login form
        return View::make('pages.login');
    }

    public function post_login(){
    //TODO: Validate login
    $credentials = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
        );

        if( Auth::attempt($credentials)) {
            //return 'You are user!';
            $prevUrl = Session::get('prevUrl');
            Session::forget('prevUrl');
            return Redirect::to($prevUrl);
        } else {
            return View::make('pages.login')->with('message', 'Wrong credentials!');
        }
    }    

	public function get_edit($commentId)
    {
        //TODO: Show form for editing user
        return 'Trying to edit commentId: '.$commentId;
    }    

	public function get_new()
    {
        //Form for creating user
        return View::make('user.new');
    }    

	public function put_update()
    {
        //TODO: Perform the update from get_edit()
    }    

	public function delete_destroy()
    {
        //TODO: request for user deleting
    }

}