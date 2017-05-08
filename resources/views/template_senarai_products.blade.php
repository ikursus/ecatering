@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Senarai Products</div>

    <div class="panel-body">

<p><a href="{{ route('addProduct') }}" class="btn btn-primary">Add Product</a></p>

<p>Ini adalah senarai products.</p>

  <table class="table table-bordered" id="table-products">

    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>

</table>

  </div><!--/panel-body-->
</div><!--/panel-->
@endsection

@section('footer')
<script>
$(function() {
        $('#table-products').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatablesProducts') !!}',
        });
    });
</script>
@endsection
