@extends("layouts.app")

@section('content')
   <div class="container">
        <div class="jumbotron bg-light">
            <h1 class="display-5">Xin chào, {{Auth::user()->name}}!</h1>
            <p class="lead">Xin chào người dùng tài khoản {{Auth::user()->name}} </p>
            <hr class="my-4">

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value="{{Auth::user()->email}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Vai trò tài khoản</label>
                    <input type="text" class="form-control" value="{{Auth::user()->role  === 1 ? "Quản trị viên" : "Người dùng"}}" disabled>
                </div>
            </form>

            <a class="btn btn-primary btn-lg" href="#" role="button">Cập nhật tài khoản</a>
        </div>
   </div>
@endsection