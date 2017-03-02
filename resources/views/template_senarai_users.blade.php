@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Senarai Users</div>

    <div class="panel-body">

<p><a href="{{ url('users/add') }}" class="btn btn-primary">Add User</a></p>

<p>Ini adalah senarai users.</p>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>

      @foreach( $senarai_users as $user )
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->role }}</td>
      </tr>
      @endforeach

    </tbody>
</table>

{{ $senarai_users->links() }}
  </div><!--/panel-body-->
</div><!--/panel-->
@endsection
