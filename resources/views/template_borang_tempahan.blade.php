@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Borang Tempahan Produk</div>

    <div class="panel-body">

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
          <select name="product_id" class="form-control">
            @foreach( $products as $item )
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <input type="text" name="customer_name" placeholder="Your Name..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="customer_email" placeholder="Your Email..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="customer_phone" placeholder="Your Phone..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="customer_address" placeholder="Your Address..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="payment_amount" placeholder="Your Payment Amount..." class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Hantar Tempahan</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
