@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Tambah User Baru</div>

    <div class="panel-body">

<p><a href="{{ url('senarai-users') }}" class="btn btn-default">Senarai Users</a></p>
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

    {!! Form::open( ['method' => 'post', 'route' => 'storeUser' ] ) !!}

    @include('template_borang_user')

    <button type="submit" class="btn btn-primary">Add User</button>

    {!! Form::close() !!}
    </div>
</div>
@endsection
