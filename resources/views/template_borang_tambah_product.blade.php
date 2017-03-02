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

      <form method="POST" action="{{ route('storeProduct') }}">

        <div class="form-group">
          <input type="text" name="name" placeholder="Product Name..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="price" placeholder="Product Price..." class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save Product</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
