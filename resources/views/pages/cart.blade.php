@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron bg-light">
        <h1 class="display-4">Lưu ý: Đọc kỹ nội dung</h1>
        <p class="lead text-danger">Sau khi thanh toán, sẽ không hoàn trả tiền với bất kì lý do nào</p>
        <hr class="my-4">
        <div class="">
            @foreach ($carts as $cart)
            <div class="watch-panel col-12 my-2">
                <div class="watch-panel-image">
                    <a href="#">
                        <img src="{{$cart->thumbnail}}" height="100px"
                            alt="">
                    </a>
                </div>
                <div class="watch-panel-content ml-5">
                    <h1 class="watch-panel-title"><a href="#">{{$cart->title}}</a></h1>
                    <p class="watch-panel-price"> Giá bán: <b>{{$cart->price}} đ</b> </p>
                    <span class="watch-panel-favorite">Yêu thích</span>
                </div>
            </div>
            @endforeach
        </div>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" onclick="clearCart()" role="button">Thanh toán ngay</a>

            <form id="clearcart-js" action="{{url("/clearcart", Auth::user()->id)}}" method="POST">
                @csrf
                <input type="text" style="display: none" name="from" value="{{Request::path()}}">
            </form>

            <script type="application/javascript">
                function clearCart() {
                    document.querySelector("#clearcart-js").submit();
                }
            </script>
        </p>
    </div>
</div>
@endsection