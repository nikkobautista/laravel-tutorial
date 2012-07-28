<?php

class PhotoComment extends Eloquent
{
	public static $timestamps = true;
	public static $table = 'photo_comments';

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function photo()
	{
		return $this->belongs_to('Photo');
	}
}
