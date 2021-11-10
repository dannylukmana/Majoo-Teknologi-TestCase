@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Edit Profil</h3>
                    <div class="my-3">
                        <x-flash-message></x-flash-message>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('frontend.updateprofile') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Isi nama kamu.." value="{{ $user->name }}">
                            @error('name')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Pengguna</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Isi nama pengguna kamu.." value="{{ $user->username }}" readonly>
                            @error('username')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" placeholder="Isi alamatmu.." value="{{ $user->alamat }}">{{ $user->alamat }}</textarea>
                            @error('alamat')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group text-right">
                            <a href="{{ route('frontend.editpassword') }}" class="btn btn-outline-secondary mr-2">Ubah Kata Sandi</a>
                            <button type="submit" class="btn btn-dark">Edit Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
