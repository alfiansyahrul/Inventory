<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Learn Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/all-products">All Product</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container my-5">
        <h1 class="text-center">Task</h1>

        <a href="/product/add" class="btn btn-dark my-1"> Add Product </a>

    <table class="table table-bordered table-hover table-striped">
      <thead class="bg-dark text-white">
        <tr class="text-center">
          <th>Name</th>
          <th>Deskripsi </th>
          <th>Price</th>
          <th>Option</th>
        </tr>
      </thead>
        <tbody class="bg-secondary text-warning">
          @foreach($products as $p)
          <tr>
            <td>{{ $p->productName }}</td>
            <td>{{ $p->productDesc }}</td>
            <td>{{ $p->productPrice }}</td>

          <td class="text-center">
            <a href="/product/edit/{{ $p->productID }}" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger btn_delete" >Delete</a>
          </td>
        </tr>
        </tbody>

          @endforeach
    </table>

  </div>



  <script type="text/javascript">
      $(document).ready(function(){
        $('.btn_delete').click(function(){
          deletes()
        });
      });

    function deletes() {
      var full_url = window.location.href;
      var segment = full_url.split("/");

    var sending_data = {
      'id_poin' : segment[5]
    }
    $.ajax({
      headers:{
        'X-CSRF-TOKEN': $
        ('meta[name="csrf-token"]').attr('content')
      },
      url:"/product/delete/{{ $p->productID }}",
      type:'get',
      dataType:'json',
      data: sending_data,// data json send
      success:function(respond_sahrul){
      //  window.location.href = "/customer"
      alert('berhasil delete')
      }
    });
    }
  </script>
    <!-- Script -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
