@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Senarai Produk</div>

    <div class="panel-body">

<p>Ini adalah senarai pakej menu hari Rabu</p>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Pakej</th>
        <th>Nama Menu</th>
      </tr>
    </thead>
    <tbody>

      @foreach( $senarai_pakej as $key => $value )
      <tr>
        <td>Pakej {{ ucwords( $key ) }}</td>
        <td>{{ $value }}</td>
      </tr>
      @endforeach

    </tbody>
</table>
  </div><!--/panel-body-->
</div><!--/panel-->
@endsection
