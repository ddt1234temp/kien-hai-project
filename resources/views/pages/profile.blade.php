@extends("layouts.app")

@section('content')
   <div class="container">
        <div class="jumbotron bg-light">
            <h1 class="display-5">Xin chào, {{Auth::user()->name}}!</h1>
            <p class="lead">Xin chào người dùng tài khoản {{Auth::user()->name}} </p>
            <hr class="my-4">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" value="{{Auth::user()->email}}" disabled>
                </div>

                <form method="POST" action="/" class="form-group">
                    <label for="">Tên người dùng</label>
                    <input id="update-name" type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                </form>

                <div class="form-group">
                    <label for="">Vai trò tài khoản</label>
                    <input type="text" class="form-control" value="{{Auth::user()->role  === 1 ? "Quản trị viên" : "Người dùng"}}" disabled>
                </div>
            </form>

        <a class="btn btn-primary btn-lg" href="{{url("/profileEdit")}}" role="button">Cập nhật tài khoản</a>
        </div>
   </div>
@endsection