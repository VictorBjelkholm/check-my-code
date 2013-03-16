<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {

    }    

	public function post_index()
    {
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
        $user = User::where_username($username)->first();
        $codes = User::find($user->id)->codes;
        return View::make('user.show')->with(array('user' => $user, 'codes' => $codes));
    }

    public function get_login(){
        return View::make('pages.login');
    }

    public function post_login(){
    $credentials = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
        );

        if( Auth::attempt($credentials)) {
            //return 'You are user!';
            return Redirect::home();
        } else {
            return View::make('pages.login')->with('message', 'Wrong credentials!');
        }
    }    

	public function get_edit()
    {

    }    

	public function get_new()
    {
        //Form for creating user
        return View::make('user.new');
    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}