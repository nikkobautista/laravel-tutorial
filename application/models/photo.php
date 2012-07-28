<?php

class Photo extends Eloquent
{
	public static $timestamps = true;

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function photocomments()
	{
		return $this->has_many('PhotoComment');
	}
}
