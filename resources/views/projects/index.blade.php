
@extends('layouts.app')

<div class="content">

        <h2>Users</h2>
    
    
    <p>
        <a href="{{route('projects.create')}}" class="btn btn-success">Crew new user</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($projects as $project)
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->name}}</td>
            <td>{{$project->email}}</td>
            <td>
                <a href="{{route('projects.edit'), ['id'=>$project->id]}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{route('projects.delete', ['id' => $project -> id])}}" method="POST">

                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>



        {{--<ul>--}}
            {{--@foreach($users as $user)--}}
                {{--<li> {{ $user->name }}--}}
                    {{--<form action="{{route('users.delete', ['id' => $user -> id])}}" method="POST">--}}

                        {{--@csrf--}}
                        {{--@method('delete')--}}

                        {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                    {{--</form>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
</div>