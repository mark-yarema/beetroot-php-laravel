@extends('layouts.app')

@section('content')
    <h2>{{$project->title}}</h2>

    <p>
        {{$project->description}}
    </p>

    @csrf
    <form action="{{route('tasks.store')}}">
        <div class="form-group">
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Creat new task</button>
        </div>
    </form>
    <div>
        @foreach($project->tasks as $task)
            <form action="{{route('tasks.complete',['task'=>$task->id])}}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group form-check">
                    <input
                            type="checkbox"
                            class="form-check-input"
                            id="taskCheckbox{{$task->id}}"
                            onChange="this.form.submit()"
                            name="completed"
                            @if($task->completed) checked @endif
                    >
                    <label class="form-check-label" for="taskCheckbox{{$task->id}}">
                        {{$task->description}}
                    </label>
                </div>
            </form>



        @endforeach
    </div>
@endsection