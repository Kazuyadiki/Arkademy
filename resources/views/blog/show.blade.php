@extends('master')

@push('style')
<link href="{{asset('/blog/bootstrap/komen/komen.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Produk : {{ $produ->nama_produk }}</h2>
        <p>Keterangan : {!! $produ->keterangan !!}</p>
        <p>Harga : {!! $produ->harga !!}</p>
        <p>Jumlah : {!! $produ->jumlah !!}</p>
      </div>
    </div>
  </div>
  @endsection