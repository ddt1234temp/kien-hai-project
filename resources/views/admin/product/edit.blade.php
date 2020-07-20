@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Tạo sản phẩm mới cho shop</h3>
    <form action="{{route("product.update", $product->id ?? "")}}" method="POST">
        @csrf
        @method("PUT")

        @include("inc._productForm")
        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
    </form>
</div>
@endsection