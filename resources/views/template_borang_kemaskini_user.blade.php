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

      <form method="POST" action="{{ url('users/' . $user->id ) }}">
        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group">
          <input type="text" name="name" placeholder="User Name..." class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group">
          <input type="email" name="email" placeholder="User Email..." class="form-control" value="{{ $user->email }}">
        </div>

        <div class="form-group">
          <input type="text" name="phone" placeholder="User Phone..." class="form-control" value="{{ $user->phone }}">
        </div>

        <div class="form-group">
          <input type="password" name="password" placeholder="User Password..." class="form-control">
        </div>

        <div class="form-group">
          <input type="password" name="password_confirmation" placeholder="Confirm User Password..." class="form-control">
        </div>

        <div class="form-group">
          <textarea name="address" class="form-control" placeholder="User Address">{{ $user->address }}</textarea>
        </div>

        <div class="form-group">
          <select name="role" class="form-control">
            <option value="">-- Please Select Role --</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
