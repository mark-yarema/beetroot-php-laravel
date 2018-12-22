
@extends('layouts.app')


    <div class="content">
        <div>

            <h2>Name User - {{$project->name}}</h2>

            <form action="{{route('projects.update', ['id'=>$project->id])}}" method="POST">'



                @csrf
                <input type="text" name="name" placeholder="Name" value="{{$project->name}}">
                <input type="submit" value="Create new User">
            </form>
        </div>
    </div>
