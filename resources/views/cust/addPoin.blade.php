<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>update point</title>
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
      <h2 class="text-center my-5"> Update Point</h2>

      <a href="/customer" class="btn btn-dark my-3"> Back </a>
    </br>
    <!-- <form action="/poin/edit" method="post"> -->

      @foreach($poins as $p)
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $p->id_poin }}">
      <label for="poin" class="form-inline">poin</label>
      <input type="number" class="form-inline value_poin" name="poin" value="{{ $p->poin }}" required>

      <input type="submit" class="btn btn-primary my-2 btn_simpan" value="simpan">

    <!-- </form> -->
    @endforeach

    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.btn_simpan').click(function(){
          sending_ajax()
        });
      });

      function sending_ajax(){
          var full_url = window.location.href;
          var segment = full_url.split("/");

        var sending_data = {
          'poin' : $('.value_poin').val(),
          'id_poin' : segment[5]
        }
        $.ajax({
          headers:{
            'X-CSRF-TOKEN': $
            ('meta[name="csrf-token"]').attr('content')
          },
          url:"/poin/edit",
          type:'post',
          dataType:'json',
          data: sending_data,// data json send
          success:function(respond_sahrul){
          //  window.location.href = "/customer"
          alert('berhasil update')
          }
        });
      }
    </script>
  </body>
</html>
