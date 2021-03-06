@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h1>Administrator Dashboard</h1>
        </div>
    </div>
    <div class="row my-4">
    	<div class="col-lg-3">
    		<div class="card">
    			<div class="card-body">
    				<p>Total Pengguna</p>
					<h3>{{ $totalUsers }}</h3>
    			</div>
    		</div>
    	</div>
    	<div class="col-lg-3">
    		<div class="card">
    			<div class="card-body">
    				<p>Total Produk</p>
					<h3>{{ $totalProducts }}</h3>
    			</div>
    		</div>
    	</div>
    	<div class="col-lg-3">
    		<div class="card">
    			<div class="card-body">
    				<p>Total Transaksi Tertunda</p>
					<h3>{{ $totalTransactionsPending }}</h3>
    			</div>
    		</div>
    	</div>
    	<div class="col-lg-3">
    		<div class="card">
    			<div class="card-body">
    				<p>Total TTransaksi Sukses</p>
					<h3>{{ $totalTransactionsHistory }}</h3>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection
