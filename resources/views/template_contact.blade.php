@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">{{ $page_title}}</div>

    <div class="panel-body">

      <p>Tarikh hari ini adalah: <?php echo $tarikh; ?></p>

      <form method="POST" action="">

        <div>
          <input type="text" name="customer_name" placeholder="Nama anda...">
        </div>

        <button type="submit">Hantar Borang</button>

        <?php echo csrf_field(); ?>

      </form>
    </div>
</div>
@endsection
