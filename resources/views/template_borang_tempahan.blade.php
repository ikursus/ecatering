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

        {!! Form::open( ['route' => 'simpanRekodTempahan' ] ) !!}

        <div class="form-group">
          {!! Form::select('product_id', $products->pluck('name', 'id'), null, ['class' => 'form-control'] ) !!}
        </div>

        <div class="form-group">
          {!! Form::text('customer_name', null, ['class' => 'form-control', 'placeholder' => 'Your Name...']) !!}
        </div>

        <div class="form-group" id="customer_email">
          <input type="text" name="customer_email" placeholder="Your Email..." class="form-control" value="{{ old('customer_email') }}">
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

      {!! Form::close() !!}
    </div>
</div>
@endsection
