@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h1>Produk</h1>
            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary">Buat Produk Baru</a>
            <div class="my-2">
            	<x-flash-message></x-flash-message>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="table-responsive">
    			<table class="table table-hover table-striped">
    				<thead>
	    				<tr>
	    					<th>No</th>
	    					<th>Nama Produk</th>
	    					<th>Gambar</th>
	    					<th>Harga</th>
	    					<th>Deskripsi</th>
	    					<th>Status</th>
	    					<th>Aksi</th>
	    				</tr>
    				</thead>
    				<tbody>
    					@forelse($products as $product)
    					<tr>
    						<td>{{ $products->count() * ($products->currentPage() - 1) + $loop->iteration }}</td>
    						<td>{{ $product->product_name }}</td>
    						<td>
    							<img  src="{{ $product->getImageProduct() }}" class="img-thumbnail" alt="">
    						</td>
    						<td>Rp. {{ number_format($product->price) }}</td>
    						<td>{{ \Str::limit($product->description, 200) }}</td>
    						<td>
							@if($product->status == 'ready')
                                                <p class="d-inline-flex rounded p-2 bg-success text-white">{{ ucwords($product->status) }}</p>
                                                @elseif($product->status == 'empty')
                                                <p class="d-inline-flex rounded p-2 bg-failure text-white">{{ ucwords($product->status) }}</p>
                                                @endif
    						</td>
    						<td>
    							<div class="d-flex justify-content-beteen">
	    							<a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning mx-1">Edit</a>
	    							
	    							<form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
	    								@csrf
	    								@method('delete')
		    							<button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus ini?');" class="btn btn-danger mx-1">Hapus</button>
	    							</form>
    							</div>
    						</td>
    					</tr>
    					@empty
    					<tr>
    						<td colspan="7">
    							<h4 class="text-center">Data Kosong</h4>
    						</td>
    					</tr>
    					@endforelse
    				</tbody>

    			</table>
    			{{ $products->links() }}
    		</div>
    	</div>
    </div>
</div>
@endsection
