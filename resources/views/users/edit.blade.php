
@extends('layouts.app')


    <div class="content">
        <div>

            <h2>Name User - {{$user->name}}</h2>

            <form action="{{route('users.update', ['id'=>$user->id])}}" method="POST">'
                @csrf
                
                @include('projects.partials.form.blade.php')

                <input type="text" name="name" placeholder="Name" value="{{$user->name}}">
                <input type="submit" value="Create new User">
            </form>
        </div>
    </div>
