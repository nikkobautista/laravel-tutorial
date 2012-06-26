<?php
class User extends Eloquent {
    
    public function user_profile()
    {
        return $this->has_one('User_Profile');
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
    
    public function photo_comment()
    {
        return $this->has_many('Photo_Comment');
    }
}