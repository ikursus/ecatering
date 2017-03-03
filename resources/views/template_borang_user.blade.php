<div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'User Name...'] ) !!}
</div>

<div class="form-group">
  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'User Email...']) !!}
</div>

<div class="form-group">
  {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'User Phone...']) !!}
</div>

<div class="form-group">
  <input type="password" name="password" placeholder="User Password..." class="form-control">
</div>

<div class="form-group">
  <input type="password" name="password_confirmation" placeholder="Confirm User Password..." class="form-control">
</div>

<div class="form-group">
  {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'User Address...']) !!}
</div>

<div class="form-group">
  {!! Form::select('role', ['admin' => 'Role Admin', 'user' => 'Role User'], null, ['class' => 'form-control', 'placeholder' => '-- Sila Pilih Role --']) !!}
</div>
