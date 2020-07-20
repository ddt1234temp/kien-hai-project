@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Tạo sản phẩm mới cho shop</h3>
    <form action="{{route("product.store")}}" method="POST">
        @csrf
        @include("inc._productForm")
        <button type="submit" class="btn btn-primary">Tạo sản phẩm mới</button>
    </form>
</div>
@endsection