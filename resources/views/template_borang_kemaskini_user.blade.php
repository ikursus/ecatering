@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Kemaskini User {{ $user->name }}</div>

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

      {!! Form::model( $user, ['method' => 'patch', 'route' => ['updateUser', $user->id ] ] ) !!}

      @include('template_borang_user')

      <button type="submit" class="btn btn-primary">Update User</button>

      {!! Form::close() !!}
    </div>
</div>
@endsection
