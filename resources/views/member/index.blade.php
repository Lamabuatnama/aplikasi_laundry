@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DATA - DATA MEMBER</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <div class="input-group mb-3">
    @include('member.insert')
</div>

        <thead>
        <tr style="text-align: center">
          <th>NAMA MEMBER</th>
          <th>ALAMAT MEMBER</th>
          <th>JENIS KELAMIN</th>
          <th>NOMER TELEPON</th>
          <th colspan="2">AKSI</td>
        </tr>
        </thead>
        @foreach ($member as $key=>$value )
        <tr>
          <td>{{$value->nama}}</td>
          <td>{{$value->alamat}}</td>
          @php
              if ($value->jenis_kelamin == 'L') {
               echo("<td>Laki - laki</td>");
              } else {
                echo("<td>Perempuan</td>");
              }
          @endphp

          <td>{{$value->tlp}}</td>
          <td style="text-align: center"> @include('member.update') </td>
          <td style="text-align: center">@include('member.hapus')</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @endsection
  @include('member.script')

