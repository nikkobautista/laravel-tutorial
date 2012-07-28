<div class="modal hide" id="upload_modal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3>Upload a new Instapic</h3>
	</div>
	<div class="modal-body">
		<form method="POST" action="{{ URL::to('photo/upload') }}" id="upload_modal_form" enctype="multipart/form-data">
			<label for="photo">Photo</label>
	        <input type="file" placeholder="Choose a photo to upload" name="photo" id="photo" />
			<label for="description">Description</label>
			<textarea placeholder="Describe your photo in a few sentences" name="description" id="description" class="span5"></textarea>
	    </form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
    	<button type="button" onclick="$('#upload_modal_form').submit();" class="btn btn-primary">Upload Instapic</a>
	</div>
</div>