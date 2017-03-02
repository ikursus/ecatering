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
        <th>Action</th>
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
        <td>
          <a href="{{ url('users/' . $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $user->id }}">
            Delete
          </button>

          <form method="POST" action="{{ url('users/' . $user->id) }}">

          <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-{{ $user->id }}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete this record?</p>
                  <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
          </form>

        </td>
      </tr>
      @endforeach

    </tbody>
</table>

{{ $senarai_users->links() }}
  </div><!--/panel-body-->
</div><!--/panel-->
@endsection
