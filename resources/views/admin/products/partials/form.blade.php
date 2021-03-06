@csrf
<div class="form-group row">
    <label for="prodname" class="col-md-4 col-form-label text-md-right">Product Name:</label>

    <div class="col-md-6">
        <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror" name="prodname"
         value="{{ old('prodname') }}@isset($product){{$product->ProdName}}@endisset" required autocomplete="prodname" autofocus>

        @error('prodname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="desc" class="col-md-4 col-form-label text-md-right">Product Description:</label>

    <div class="col-md-6">
        <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
         value="{{ old('desc') }}@isset($product){{$product->ProdDescription}}@endisset">

        @error('desc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="unitprice" class="col-md-4 col-form-label text-md-right">Unit Price</label>

    <div class="col-md-2">
        <input id="unitprice" type="number" min="0" max="100000" step="1" value="{{ old('unitprice') }}@isset($product){{ $product->UnitPrice }}@endisset" class="form-control @error('unitprice') is-invalid @enderror" 
        name="unitprice" required>
        
        @error('unitprice')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

    <div class="col-md-3">
        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" 
        required>
            @isset($product)
                <option value="{{ $product->category_id }}">{{ $category->CategoryName }}</option>
            @endisset
            <option value="1">Silog</option>
            <option value="2">Beverages</option>
            <option value="3">Add-On</option>
        </select>
        
        @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="prodpicture" class="col-md-4 col-form-label text-md-right" >Upload</label>
    <div class="col-md-6">
        <input id="prodpicture" type="file" class="btn btn-sm @error('prodpicture') is-invalid @enderror" 
        name="prodpicture">
        @error('prodpicture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>                                           
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            @if (isset($product))
                Edit
            @else
                Add Product
            @endif
        </button>
    </div>
</div>