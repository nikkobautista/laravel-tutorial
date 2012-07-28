<?php
class User extends Eloquent
{
    public static $timestamps = true;

    public function userprofile()
    {
        return $this->has_one('UserProfile');
    }
    
    public function followers()
    {
        return $this->has_many_and_belongs_to('User', 'relationships', 'followed_id', 'follower_id');
    }
    
    public function following()
    {
        return $this->has_many_and_belongs_to('User', 'relationships', 'follower_id', 'followed_id');
    }
    
    public function photos()
    {
        return $this->has_many('Photo');
    }
    
    public function photocomment()
    {
        return $this->has_many('PhotoComment');
    }
}