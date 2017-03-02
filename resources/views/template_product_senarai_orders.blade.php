@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Senarai Tempahan</div>

    <div class="panel-body">


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Pelanggan</th>
        <th>Email Pelanggan</th>
        <th>Telefon Pelanggan</th>
        <th>Pakej Tempahan</th>
        <th>Status Tempahan</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $product->senaraiOrders as $order )
      <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->customer_name }}</td>
        <td>{{ $order->customer_email }}</td>
        <td>{{ $order->customer_phone }}</td>
        <td>{{ $order->product->name }}</td>
        <td>{{ $order->status }}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </div><!--/panel-body-->
</div><!--/panel-->
@endsection
