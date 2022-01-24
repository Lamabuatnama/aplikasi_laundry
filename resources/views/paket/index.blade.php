@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DATA - DATA paket</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <div class="input-group mb-3">
    @include('paket.insert')
</div>

        <thead>
        <tr style="text-align: center">
          <th>NAMA paket</th>
          <th>ALAMAT paket</th>
          <th>JENIS KELAMIN</th>
          <th>NOMER TELEPON</th>
          <th colspan="2">AKSI</td>
        </tr>
        </thead>
        @foreach ($paket as $key=>$value )


        <tr>
          <td>{{$value->outlet->nama}}</td>
          <td>{{$value->jenis}}</td>
          <td>{{$value->nama_paket}}</td>
          <td>{{$value->harga}}</td>
          <td style="text-align: center"> @include('paket.update') </td>
          <td style="text-align: center">@include('paket.hapus')</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @endsection
  @include('paket.script')

