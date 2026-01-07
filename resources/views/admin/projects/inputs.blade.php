<input type="hidden" name="projects_id" id="projects_id">
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" value="{{!empty($project->title) ? $project->title : ''}}" id="title" name="title" placeholder="Enter Title" required>
</div>


<div class="form-group">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" id="image" name="image" {{ empty($project->image) ? 'required' : '' }}>

    @if (!empty($project->image))
         <small>Current Image:</small><br>
<img src="{{ asset('storage/images/' . $project->image) }}" alt="Current Image" width="150">
    @endif
</div>
