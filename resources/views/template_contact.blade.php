@extends('layouts/app')

@section('content')

<div class="panel">
  <div class="panel-heading">{{ $page_title}}</div>

    <div class="panel-body">

      <p>Tarikh hari ini adalah: <?php echo $tarikh; ?></p>

      <form method="POST" action="">

        <div class="form-group">
          <input type="text" name="customer_name" placeholder="Your Name..." class="form-control">
        </div>

        <div class="form-group">
          <input type="email" name="customer_email" placeholder="Your Email..." class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="customer_phone" placeholder="Your Phone..." class="form-control">
        </div>

        <div class="form-group">
          <textarea name="customer_message" placeholder="Your Message..." class="form-control">
          </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Hantar Borang</button>

        <?php echo csrf_field(); ?>

      </form>
    </div>
</div>
@endsection
