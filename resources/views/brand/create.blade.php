@extends('layouts.main')
@section('content')
    <div class="form-container">
        <h1>Tambah Brand Baru</h1>
        <form action="/brand" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Brand</label>
                <input type="text" id="nama" name="name" required>
            </div>           
            <div class="form-group">
                <button type="submit" class="add-btn">Tambah Brand</button>
            </div>
        </form>
    </div>
@endsection
