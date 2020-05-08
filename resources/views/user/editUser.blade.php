@extends('layouts.index')

@section('content')

<div class="container">
  <h2 class="text-center">Edit User</h2>
  <a href="/user" class="btn btn-dark my-2">Back</a>

  <form action="/updateUser" method="post">
    @foreach($user as $u)
      {{ csrf_field() }}
    <div class="form-row">
      <input type="hidden" name="id" value="{{ $u->user_id }}">
      <div class="form-group col-md-6">
        <label> Name</label>
        <input type="text" class="form-control" name="userName" required value="{{ $u->user_name }}">
      </div>
      <div class="form-group col-md-6">
        <label> Email</label>
        <input type="email" class="form-control" name="userEmail" required value="{{ $u->user_email }}">
      </div>
    </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="userAddress" rows="3" cols="30">{{ $u->user_addres }}</textarea>
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="userPhone" required value="{{ $u->user_phone }}">
          </div>
        </div>
      </div>
      <input type="submit" class="btn btn-success float-right my-2" value="save">
      @endforeach
  </form>

</div>

@endsection
