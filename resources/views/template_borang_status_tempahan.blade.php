@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Borang Status Tempahan Produk</div>

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

      <form method="POST" action="{{ route('paparStatusTempahan') }}">

        <div class="form-group">
          <input type="text" name="customer_email" placeholder="Enter Your Email..." class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Semak Status Tempahan</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
