@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{$product->title}} </li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 col-12">
            <img class="rounded" src="{{$product->thumbnail}}" width="100%" height="300px" style="object-fit: cover"
                alt="">
        </div>
        <div class="col-md-8 col-12">
            <h3 class="text-left"> {{$product->title}} </h3>
            <p>
                <h5 class="text-danger">Giá: {{$product->price}} VNĐ</h5>
            </p>
            <p style="border: 1px solid rgba(0, 0, 0, 0.1)">
                <div class="text-success">Miêu tả</div>
                <small>
                    {{$product->description}}
                </small>
            </p>

            <div class="tags mb-2">
                <small class="px-4 py-1 bg-secondary rounded text-light">Hàng mới</small>
            </div>

            <div class="d-flex mt-3">
                @if (Session::has("success"))
                    <a href="/cart" class="btn btn-primary mr-2">Thanh toán</a>
                @endif
                <a href="#" onclick="addToCart()" class="btn btn-danger">Thêm vào giỏ hàng</a>
                <form id="addtocart-js" action="{{url("/addtocart", $product->id)}}" method="POST">
                    @csrf
                    <input type="text" style="display: none" name="from" value="{{Request::path()}}">
                </form>

                <script type="application/javascript">
                    function addToCart() {
                        document.querySelector("#addtocart-js").submit();
                    }
                </script>
            </div>
        </div>
    </div>

    @if (Session::has("success"))
    <div class="alert alert-success mt-3" role="alert">
        {{Session::get("success")}}
    </div>
    @endif

    <div class="alert alert-danger mt-3" role="alert">
        Cảnh báo mua hàng không hoàn trả lại
    </div>
</div>
@endsection