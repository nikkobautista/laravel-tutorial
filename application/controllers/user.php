<?php
class User_Controller extends Base_Controller
{    
    public function action_authenticate()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $new_user = Input::get('new_user', 'off');
        
        if( $new_user == 'on' ) {
            try {
                $user = new User();
                $user->email = $email;
                $user->password = Hash::make($password);
                $user->save();
                Auth::login($user);
            
                echo "Successfully created new user and logged in!";
            }  catch( Exception $e ) {
                echo "Faield to create new user!";
            }
        } else {
            $credentials = array(
                'username' => $email,
                'password' => $password
            );
            if( Auth::attempt($credentials)) {
                echo "Successfully logged in!";
            } else {
                echo "Failed to login!";
            }
        }
    }
}