<?php

	class Users_Controller extends Base_Controller
	{
		public function get_index()
		{
			$users = User::all();
			return View::make('users.index')->with('users', $users);
		}

		public function get_create()
		{
			return View::make('users.create');
		}

		public function post_create()
		{
			$user = new User;
			$user->real_name = Input::get('real_name');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->save();
			return Redirect::to ('users');
		}

		public function get_delete($user_id)
		{
			$user = User::find($user_id);

			if(is_null($user))
			{
				return Redirect::to('users');
			}

			$user->delete();
			return Redirect::to('users');
		}

		public function get_update($user_id)
		{
			$user = User::find($user_id);

			if(is_null($user))
			{
				return Redirect::to('users');
			}
			
			return View::make('users.update')->with('user', $user);
		}

		public function post_update($user_id)
		{
			$user = User::find($user_id);

			if(is_null($user))
			{
				return Redirect::to('users');
			}

			$user->real_name = Input::get('real_name');
			$user->email = Input::get('email');
			
			if(Input::has('password'))
			{
				$user->password = Input::get('password');
			}

			$user->save();
			return Redirect::to('users');
		}
	}