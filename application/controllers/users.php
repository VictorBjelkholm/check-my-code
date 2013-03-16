<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {

    }    

	public function post_index()
    {

    }    

	public function get_show($username)
    {
        $user = User::where_username($username)->first();
        return View::make('user.show')->with('user', $user);
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

    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}