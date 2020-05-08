@extends('layouts.index')

@section('content')

<div class="container">
  <h2 class="text-center">Add New User</h2>
  <a href="/user" class="btn btn-dark my-2">Back</a>

  <form action="/addNewUser" method="post">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label> Name</label>
        <input type="text" class="form-control" name="userName" required placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label> Email</label>
        <input type="email" class="form-control" name="userEmail" required placeholder="Example @email.com">
      </div>
    </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="userAddress" rows="3" cols="30"></textarea>
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="userPhone" required placeholder="Phone Number ">
          </div>
        </div>
      </div>
      <input type="submit" class="btn btn-success float-right my-2" value="save">
  </form>

</div>

@endsection
