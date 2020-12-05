@extends('master')

@push('style')
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit Produk {{$produ->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/produk/{{$produ->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Nama_Produk</label>
          <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{old('nama_produk', $produ->nama_produk)}}" placeholder="Masukkan Judul">
            @error('nama_produk')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
  
          <div class="form-group">
              <label for="isi">Keterangan</label>
              <textarea name="keterangan" placeholder="Masukkan Keterangan" class="form-control my-editor">{{old('keterangan', $produ->keterangan)}}</textarea>
              @error('keterangan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
  
            <div class="form-group">
              <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{old('harga', $produ->harga)}}" placeholder="Masukkan Harga">
              @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
  
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{old('jumlah', $produ->jumlah)}}" placeholder="Masukkan jumlah">
              @error('jumlah')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
@endsection
@push('script')
@endpush