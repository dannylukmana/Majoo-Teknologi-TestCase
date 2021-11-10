@extends('layouts.app')

@section('style')
<style>
    .key {
        font-weight: 800;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <h1 class="mb-2">Detil Produk</h1>
            <div class="my-3">
                <x-flash-message></x-flash-message>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $product->getImageProduct() }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="key">Nama Produk</td>
                                            <td>:</td>
                                            <td>{{ $product->product_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="key">Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($product->price) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="key">Status</td>
                                            <td>:</td>
                                            <td>
                                                @if($product->status == 'ready')
                                                <p class="d-inline-flex rounded p-2 bg-success text-white">{{ ucwords($product->status) }}</p>
                                                @elseif($product->status == 'empty')
                                                <p class="d-inline-flex rounded p-2 bg-failure text-white">{{ ucwords($product->status) }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="px-4">
                            <p class="key">Deskripsi :</p>
                            <p>{{ $product->description }}</p>
                            <div class="mt-3">
                                <button class="btn btn-block btn-outline-dark" data-toggle="modal" data-target="#buyModal">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Beli Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('frontend.buyitem', $product->id) }}" method="post">
      <div class="modal-body">
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Isi nama kamu.." @auth value="{{ auth()->user()->name }}" @endauth>
                @error('name')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Isi alamat kmau.." @auth value="{{ auth()->user()->alamat }}" @endauth>
                @error('alamat')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="unit">Unit</label>
                <input type="number" name="unit" class="form-control" id="unit" placeholder="Isi unitnya.." data-price={{ $product->price }} value="1">
                @error('unit')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-dark">Beli</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>

</script>
@endsection