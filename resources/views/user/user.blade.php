@extends('layouts.index')

@section('content')
    <div class="container">
      <h2 class="text-center">User Management</h2>
      <a href="/addUser" class="btn btn-success my-2"> Add New User</a>
      <table class="table table-bordered">
        <thead class="thead-dark text-center">
          <tr>
            <th >Name</th>
            <th >Email</th>
            <th >Phone</th>
            <th >Option</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($user as $u)
          <tr>
            <td>{{ $u->user_name }}</td>
            <td>{{ $u->user_email }}</td>
            <td>0{{ $u->user_phone}}</td>
            <td>
              <a href="/editUser/{{ $u->user_id }}" class="btn btn-info">Edit</a>
              <a href="/deleteUser/{{ $u->user_id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
    </div>
@endsection
