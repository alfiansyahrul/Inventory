<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>add product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body>
    <div class="container">
      <h2 class="text-center my-5"> Add Product</h2>

      <a href="/task" class="btn btn-dark my-3"> Back </a>
    </br>
    <form>

      {{ csrf_field() }}

      <label for="name" class="form-inline">Name</label>
      <input type="text" class="form-control add_name" name="name" required>

      <label for="desc" class="form-inline" >Desc</label>
      <input type="text" class="form-control add_desc" name="desc" required>

      <label for="price" class="form-inline">Price</label>
      <input type="number" class="form-control add_price" name="price" required>
      <input type="submit" class="btn btn-primary my-2 btn_add" value="simpan">

    </form>


    </div>


    <script type="text/javascript">
      $(document).ready(function(){
        $('.btn_add').click(function(){
          send_add()
        });
      });

      function send_add() {
        var full_url  = window.location.href;
        var segment   = full_url.split("/");

        var send_add  = {
          'productName' : $('.add_name').val(),
          'productDesc' : $('.add_desc').val(),
          'productPrice': $('.add_price').val()
        }
        $.ajax ({
          headers:{
            'X-CSRF-TOKEN': $
            ('meta[name="csrf-token"]').attr('content')
          },
          url:"/product/store",
          type:'post',
          dataType:'json',
          data: send_add,// data json send
          success:function(respond_server){
            window.location.href = "/task"
          }
        });
      }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
