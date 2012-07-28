<?php
class Photo_Controller extends Base_Controller
{
    public function action_upload()
    {
    	$input = Input::all();
    	
    	if( isset($input['description']) ) {
    		$input['description'] = filter_var($input['description'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    	}

    	$rules = array(
    		'photo' => 'required|image|max:500', //photo upload must be an image and must not exceed 500kb
    		'description' => 'required' //description is required
    	);

    	$validation = Validator::make($input, $rules);

    	if( $validation->fails() ) {
    		return Redirect::to('dashboard')->with_errors($validation);
    	}

    	$extension = File::extension($input['photo']['name']);
    	$directory = path('public').'uploads/'.sha1(Auth::user()->id);
    	$filename = sha1(Auth::user()->id.time()).".{$extension}";

    	$upload_success = Input::upload('photo', $directory, $filename);
    	
        if( $upload_success ) {
        	$photo = new Photo(array(
        		'location' => URL::to('uploads/'.sha1(Auth::user()->id).'/'.$filename),
        		'description' => $input['description']
        	));
        	Auth::user()->photos()->insert($photo);
			Session::flash('status_success', 'Successfully uploaded your new Instapic');
        } else {
            Session::flash('status_error', 'An error occurred while uploading your new Instapic - please try again.');
        }
    	return Redirect::to('dashboard');
    }
}