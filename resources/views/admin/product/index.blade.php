@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">Danh sách sản phẩm</h1>

    <div>
        <a class="btn btn-primary mb-3" href="{{route("product.create")}}">Thêm sản phẩm mới</a>
    </div>

    <small class="text-secondary mb-2 d-block">Tài khoản quản lý ID {{Auth::user()->id}} :
        <b>{{Auth::user()->name}}</b></small>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->title}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a class="btn btn-success" href="{{route("product.edit", $product->id)}}">Sửa</a>
                    <a class="btn btn-danger" href="javascript:void(0)"
                        onclick="document.querySelector('#form').submit()">Xóa</a>

                    <form id="form" action="{{route("product.destroy", $product->id)}}" style="display: none"
                        method="POST"> @csrf
                        @method("DELETE") </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{$products->links()}}
    </div>
</div>
@endsection