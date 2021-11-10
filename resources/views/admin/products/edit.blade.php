@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h1>Edit Produk</h1>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header">Form</div>
                <div class="card-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    @include('admin.products._form')
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
