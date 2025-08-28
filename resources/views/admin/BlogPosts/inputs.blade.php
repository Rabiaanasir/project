<input type="hidden" name="posts_id" id="posts_id">
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" value="{{!empty($post->title) ? $post->title : ''}}" id="title" name="title" placeholder="Enter Title">
    <span class="text-danger error-text title_error"></span>
</div>
<div class="form-group">
    <label for="description" class="control-label">Description</label>
    <input type="text" class="form-control" value="{{!empty($post->description) ? $post->description : ''}}" id="description" name="description" placeholder="Enter Description" required>
<span class="text-danger error-text description_error"></span>
</div>

<div class="form-group">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
<span class="text-danger error-text image_error"></span>
    @if (!empty($post->image))
         <small>Current Image:</small><br>
<img src="{{ asset('storage/images/' . $post->image) }}" alt="Current Image" width="150">
    @endif
</div>

