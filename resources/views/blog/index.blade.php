@extends('master')

@section('content')
<div class= "mt-1 ml-3">
  <div class="card">
      <div class="card-header">
        <h3 class="card-title">Produk</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          @if(session('Success'))
              <div class="alert alert-success">
                  {{ session('Success') }}
              </div>
          @endif
          <a class="btn btn-primary mb-2" href="/produk/create">Membuat Produk Baru</a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Produk</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($produk as $key => $produ)
                  <tr>
                      <td> {{ $key + 1 }}  </td>
                      <td> {{$produ->nama_produk}} </td>
                      <td> {{$produ->keterangan}} </td>
                      <td> {{$produ->harga}} </td>
                      <td> {{$produ->jumlah}} </td>
                      <td style="display: flex;"> 
                          <a href="/produk/{{$produ->id}}" class="btn btn-info btn-sm">show</a>
                          <a href="/produk/{{$produ->id}}/edit" class="btn btn-default btn-sm">edit</a>
                          <form action="/produk/{{$produ->id}}" method="post">
                              @csrf
                              @method('Delete')
                              <input type="submit" value="delete" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
                  @empty
                      <tr>
                          <td colspan="6" align="center">Tidak ada Produk</td>
                      </tr>
              @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      {{-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div> --}}
    </div>
</div>
@endsection