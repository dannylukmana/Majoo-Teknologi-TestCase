@if(isset($product))
    <div class="form-group">
        <label for="product_name">Nama Produk</label>
        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Isi nama produk.." value="{{ $product->product_name }}">
        @error('product_name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Gambar</label>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $product->getImageProduct() }}" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-8">
                <input type="file" name="picture" class="form-control" id="picture" placeholder="Mengunggah gambar..">
                @error('picture')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="price">Harga</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                  Rp.
                </div>
              </div>
            <input type="number" name="price" class="form-control" id="price" placeholder="Isi harga.." value="{{ $product->price }}">
        </div>
        @error('price')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea type="text" name="description" rows="10" class="form-control" id="description" placeholder="Isi deskripsi..">{{ $product->product_name }}</textarea>
        @error('description')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" id="status">
            <option value="" disabled>-- Choose Status --</option>
            <option value="ready" @if($product->status == 'ready') selected @endif>{{ ucwords($product->status) }}</option>
            <option value="empty" @if($product->status == 'empty') selected @endif>{{ ucwords($product->status) }}</option>
        </select>
        @error('status')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </div>
@else
    <div class="form-group">
        <label for="product_name">Nama Produk</label>
        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Isi nama produk..">
        @error('product_name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" name="picture" class="form-control" id="picture" placeholder="Mengunggah gambar..">
        @error('picture')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                  Rp.
                </div>
              </div>
            <input type="number" name="price" class="form-control" id="price" placeholder="Isi harga..">
        </div>
        @error('price')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" rows="10" class="form-control" id="description" placeholder="Isi deskripsi.."></textarea>
        @error('description')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" id="status">
            <option value="" selected disabled>-- Choose Status --</option>
            <option value="ready">Ready</option>
            <option value="empty">Empty</option>
        </select>
        @error('status')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Buat Produk Baru</button>
    </div>
@endif