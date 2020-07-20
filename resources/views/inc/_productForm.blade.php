<div class="form-group">
    <label for="title">Tên sản phẩm</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title"
        name="title" placeholder="Tên sản phẩm" value="{{old("title", $product->title ?? "")}}">

    @error('title') <small id="" class="form-text text-muted">@error('title')@enderror</small> @enderror
</div>

<div class="form-group">
    <label for="description">Miêu tả sản phẩm</label>
    <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="description"
        aria-describedby="description" name="description"
        placeholder="Miêu tả về sản phẩm">{{old("description", $product->description ?? "")}}</textarea>
    @error('description') <small id="" class="form-text text-muted">@error('description')@enderror</small> @enderror
</div>

<div class="form-group">
    <label for="price">Giá sản phẩm</label>
    <input type="number" class="form-control @error('title') is-invalid @enderror" id="price" aria-describedby="price"
        name="price" placeholder="Tên sản phẩm" value="{{old("price", $product->price ?? "")}}">
    @error('price') <small id="" class="form-text text-muted">@error('price')@enderror</small> @enderror
</div>

<div class="form-group">
    <label for="thumbnail">Ảnh sản phẩm</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="thumbnail"
        aria-describedby="thumbnail" name="thumbnail" placeholder="Ảnh về sản phẩm"
        value="{{old("thumbnail", $product->thumbnail ?? "")}}">

    @error('thumbnail') <small id="" class="form-text text-muted">@error('thumbnail')@enderror</small> @enderror
</div>