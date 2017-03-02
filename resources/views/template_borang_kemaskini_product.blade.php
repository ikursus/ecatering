@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Tambah Product Baru</div>

    <div class="panel-body">

<p><a href="{{ route('showProducts') }}" class="btn btn-default">Senarai Products</a></p>
<hr>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('updateProduct', [ $product->id ] ) }}">
        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group">
          <input type="text" name="name" placeholder="Product Name..." class="form-control" value="{{ $product->name }}">
        </div>

        <div class="form-group">
          <input type="text" name="price" placeholder="Product Price..." class="form-control" value="{{ $product->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
