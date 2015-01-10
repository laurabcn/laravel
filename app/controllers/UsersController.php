<?php

class UsersController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function getIndex()
	{
		$users = User::all();
		return View::make("users.index")->with("users", $users);
	}
	
	public function getCreate()
	{
		return View::make("users.create");
	}
	
	public function postCreate()
	{
		$user = new User;
		
		$user->real_name = Input::get("real_name");
		$user->email = Input::get("email");
		$user->password = Input::get("password");
		
		$user->save();
		
		return Redirect::to('users');
	}
	
	public function getDelete($id_user)
	{
		$user = User::find($id_user);
		
		if(is_null($user))
		{
			return Redirect::to("users");
		}
		
		$user->delete();
		
		return Redirect::to("users");
	}
	
	public function getUpdate($id_user)
	{
		$users = User::find($id_user);
		
		if(is_null($users)){
			return Redirect::to("users");
		}
		
		return View::make("users.update")->with("user", $users);

	}
	
	public function postUpdate($id_user)
	{
		
		$user = User::find($id_user);
		
		if(is_null($user)){
			return Redirect::to("users");
		}
		
		$user->real_name = Input::get('real_name');
		$user->email = Input::get('email');
		
		if(Input::has('password')){
			$user->password = Input::get('password');
		}
		
		$user->save();
		
		return Redirect::to('users');
	}
	
	
	public function getPosts($id)
	{
    	return "{$id} -->";
	}
	
	public function getProfile()
	{
    // routed from GET request to /users/profile
	}

	public function postProfile()
	{
    // routed from POST request to /users/profile
	}
	
}
