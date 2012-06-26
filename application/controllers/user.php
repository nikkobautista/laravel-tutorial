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
            
                return Redirect::to('dashboard');
            }  catch( Exception $e ) {
                echo "Faield to create new user!";
            }
        } else {
            $credentials = array(
                'username' => $email,
                'password' => $password
            );
            if( Auth::attempt($credentials)) {
                return Redirect::to('dashboard');
            } else {
                echo "Failed to login!";
            }
        }
    }
}