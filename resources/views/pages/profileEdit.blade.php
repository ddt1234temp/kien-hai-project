@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron bg-light">
        <h1 class="display-5">Xin chào, {{Auth::user()->name}}!</h1>
        <p class="lead">Xin chào người dùng tài khoản {{Auth::user()->name}} </p>
        <hr class="my-4">

    <form action="{{url("/profile", Auth::user()->id)}}" method="POST">
        @csrf
            <label for="">Tên người dùng</label>
            <input id="update-name" type="text" class="form-control mb-3" name="name" value="{{Auth::user()->name}}">

            <button class="btn btn-primary btn-lg" type="submit">Cập nhật tên tài khoản</button>

        </form>

    </div>
</div>
@endsection