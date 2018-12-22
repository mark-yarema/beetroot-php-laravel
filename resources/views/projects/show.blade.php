@extends('layouts.app')

@section('content')
    <h2>{{$project->title}}</h2>

    <p>
        {{$project->description}}
    </p>

    @csrf
    <div>
        @foreach($project->tasks as $task)
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">{{$task->description}}</label>
            </div>
        @endforeach
    </div>
@endsection