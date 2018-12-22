@extends('layouts.app')


    <div class="content">
        <div>
            <h2>Create User</h2>
            <form action="{{route('projects.store')}}" method="POST">'

                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">

                <input type="submit" value="Create new User">
            </form>
        </div>
    </div>
