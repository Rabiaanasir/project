<input type="hidden" name="posts_id" id="posts_id">
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" value="{{!empty($post->title) ? $post->title : ''}}" id="title" name="title" placeholder="Enter Title" required>
</div>
<div class="form-group">
    <label for="description" class="control-label">Description</label>
    <input type="text" class="form-control" value="{{!empty($post->description) ? $post->description : ''}}" id="description" name="description" placeholder="Enter Description" required>
</div>

<div class="form-group">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">

    @if (!empty($post->image))
        <small>Current Image: {{ $post->image }}</small>
    @endif
</div>

