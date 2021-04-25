@extends('layouts.master')

@section('title', 'Blog Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div>
        <div class="container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="email"> </br>
                <input type="password" name="password"> <br>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
@endsection