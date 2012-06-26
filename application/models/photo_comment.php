<?php

class Photo_Comment extends Eloquent {

	public function user()
	{
		return $this->has_one('User');
	}

	public function photo()
	{
		return $this->has_one('Photo');
	}

}
