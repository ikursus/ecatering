@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Tambah User Baru</div>

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

      <form method="POST" action="">

        <div class="form-group">
          <input type="text" name="name" placeholder="User Name..." class="form-control">
        </div>

        <div class="form-group">
          <input type="email" name="email" placeholder="User Email..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="phone" placeholder="User Phone..." class="form-control">
        </div>

        <div class="form-group">
          <input type="password" name="password" placeholder="User Password..." class="form-control">
        </div>

        <div class="form-group">
          <input type="password" name="password_confirmation" placeholder="Confirm User Password..." class="form-control">
        </div>

        <div class="form-group">
          <textarea name="address" class="form-control" placeholder="User Address">
          </textarea>
        </div>

        <div class="form-group">
          <select name="role" class="form-control">
            <option value="">-- Please Select Role --</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Add User</button>

         {{ csrf_field() }}

      </form>
    </div>
</div>
@endsection
