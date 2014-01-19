<?php

	class User extends Eloquent
	{
		// set the password field to encrypted
		public function set_password($string)
		{
			$this->set_attribute('password', Hash::make($string));
		}
	}