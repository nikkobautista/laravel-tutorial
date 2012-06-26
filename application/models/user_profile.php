<?php

class User_Profile extends Eloquent {

	public function user()
	{
		return $this->has_one('User');
	}

}
