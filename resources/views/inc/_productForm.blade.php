<div class="form-group">
    <label for="title">Tên sản phẩm</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Tên sản phẩm"
        value="{{old("title", $product->title ?? "")}}">
    {{-- @error('title')
    <small id="" class="form-text text-muted is-invalid">@error("title")</small>
    @enderror --}}
</div>

<div class="form-group">
    <label for="description">Miêu tả sản phẩm</label>
    <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description"
        placeholder="Miêu tả về sản phẩm">{{old("description", $product->description ?? "")}}</textarea>
    <small id="" class="form-text text-muted">Description</small>
</div>

<div class="form-group">
    <label for="price">Giá sản phẩm</label>
    <input type="number" class="form-control" id="price" aria-describedby="price" name="price"
        placeholder="Tên sản phẩm" value="{{old("price", $product->price ?? "")}}">
    <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div class="form-group">
    <label for="thumbnail">Ảnh sản phẩm</label>
    <input type="text" class="form-control" id="thumbnail" aria-describedby="thumbnail" name="thumbnail"
        placeholder="Ảnh về sản phẩm" value="{{old("thumbnail", $product->thumbnail ?? "")}}">

    <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>