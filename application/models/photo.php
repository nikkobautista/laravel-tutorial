<?php

class Photo extends Eloquent {

	public function user()
	{
		return $this->has_one('User');
	}

}
