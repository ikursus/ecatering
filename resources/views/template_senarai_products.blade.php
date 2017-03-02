@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">Senarai Products</div>

    <div class="panel-body">

<p><a href="{{ route('addProduct') }}" class="btn btn-primary">Add Product</a></p>

<p>Ini adalah senarai products.</p>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach( $senarai_products as $item )
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>
          <!-- Button edit product -->
          <a href="{{ route('editProduct', [$item->id] ) }}" class="btn btn-sm btn-primary">Edit</a>

          <!-- Button delete product -->
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $item->id }}">
            Delete
          </button>

          <form method="POST" action="{{ route('deleteProduct', [$item->id] ) }}">

          <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-{{ $item->id }}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete this record?</p>
                  <p>Name: {{ $item->name }}</p>
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

{{ $senarai_products->links() }}
  </div><!--/panel-body-->
</div><!--/panel-->
@endsection
