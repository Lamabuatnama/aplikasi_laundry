@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DATA - DATA outlet</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <div class="input-group mb-3">
    @include('outlet.insert')
</div>

        <thead>
        <tr style="text-align: center">
          <th>NAMA outlet</th>
          <th>ALAMAT outlet</th>
          <th>JENIS KELAMIN</th>
          <th>NOMER TELEPON</th>
          <th colspan="2">AKSI</td>
        </tr>
        </thead>
        @foreach ($outlet as $key=>$value )
        <tr>
          <td>{{$value->nama}}</td>
          <td>{{$value->alamat}}</td>
          <td>{{$value->tlp}}</td>
          <td style="text-align: center"> @include('outlet.update') </td>
          <td style="text-align: center">@include('outlet.hapus')</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @endsection
  @include('outlet.script')

