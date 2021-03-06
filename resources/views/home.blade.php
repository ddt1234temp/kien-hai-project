@extends('layouts.app')

@section('content')
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="width: 100%; height: 500px; object-fit: cover" class="d-block w-100"
          src="https://scdn.thitruongsi.com/image/cached/size/w800-h0/img/product/2019/10/24/d87c08e0-f5f9-11e9-a482-29c868776832.jpg"
          alt="First slide">
      </div>
      <div class="carousel-item">
        <img style="width: 100%; height: 500px; object-fit: cover" class="d-block w-100"
          src="https://scdn.thitruongsi.com/image/cached/size/w800-h0/img/product/2019/10/24/d87c08e0-f5f9-11e9-a482-29c868776832.jpg"
          alt="Second slide">
      </div>
      <div class="carousel-item">
        <img style="width: 100%; height: 500px; object-fit: cover" class="d-block w-100"
          src="https://scdn.thitruongsi.com/image/cached/size/w800-h0/img/product/2019/10/24/d87c08e0-f5f9-11e9-a482-29c868776832.jpg"
          alt="
          Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- Home --}}
  <div class="row mt-4">
    @if (Session::has("success"))
    <div class="alert alert-success col-12">
      {{Session::get("success")}}
    </div>
    @endif
    @foreach ($products as $product)
    <div class="col-lg-3 col-md-4 col-12 my-2">
      <div class="card" style="width: 100%">
        <img class="card-img-top" style="width: 100%; height: 150px; object-fit: cover" src="{{$product->thumbnail}}"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="{{url("/product/$product->id")}}">{{$product->title}}</a></h5>
          <p> <b>Giá: </b> <span class="price text-danger">{{$product->price}}VNĐ</span></p>
          <p class="card-text">{{$product->description}}</p>
        <a class="btn btn-primary" href="{{url("/product/$product->id")}}">Chi tiết đặt hàng</a>
        </div>
      </div>
    </div>
    @endforeach

    <div class="pagi">
      {{$products->links()}}
    </div>
  </div>
</div>
@endsection