<div class="form-group">
    <lable for="titrl">Title</lable>
    <input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
           id="title" placeholder="Enter title" value="{{old('title') ?? $project->title}}">


</div>

<div class="form-group">
    <lable for="description">Description</lable>
    <input type="text" name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
           id="title" placeholder="Enter description" value="{{old('description') ?? $project->description}}">
    <textarea name="description" id="description" class="form-control {{$errors->has('description' ? 'is-invalid' : '')}}"></textarea>
</div>
