<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inventory Gudang - @yield('title')</title>

    <style>

    </style>
  </head>
  @section('menubar')
  <body style="background-color: gray;">
      <!---     MENU BAR ---------------->
      <div class="container bg-white my-2">
            <div class="row">
            <div class="col-4 border">
              <img src="{{ ('images/avatar.png') }}" alt="Avatar" class="img-fluid rounded-circle my-2 mx-5"> <br> <br>
              <hr> <hr>
              <!-- Menu Bar -->
              <div class="list-group my-2">
                <button type="button" class="list-group-item list-group-item-action active text-center">
                Menu Admin
                </button>
                <a type="button" class="list-group-item list-group-item-action menu-admin" id="user" href="/user">User</a>
                <a type="button" class="list-group-item list-group-item-action menu-admin" id="member" href="/member">Member</a>
                <a type="button" class="list-group-item list-group-item-action menu-admin" id="brand" href="/brand">Brand</a>
                <a type="button" class="list-group-item list-group-item-action menu-admin" id="product" href="/product">Product</a>
              </div>
    @show


            </div>
            <!-- CONTENT ------------------>
            <div class="col-8 border">
              <h2 class="text-center mt-3"><strong>Good Luck N Have Nice Day</strong></h2>
              <hr><hr>
              <div class="tampilkan">
                @yield('content')

              </div>
            </div>

          </div>
      </div>


      <script>
      // $(document).ready(function(){
      //     $(".tampilkan").load("{{URL::to('Template_dom/user.html')}}");
      //   $('.menu-admin').click(function(){
      //     var menu = $(this).attr('id');
      //
      //     if(menu == 'user'){
      //     $(".tampilkan").load("{{URL::to('Template_dom/user.html')}}");
      //   }
      //   else if(menu == 'member'){
      //     // alert('profil')
      //     $(".tampilkan").load("{{URL::to('Template_dom/member.html')}}");
      //   }
      //   else if(menu == 'brand'){
      //     $('.tampilkan').load("{{URL::to('Template_dom/brand.html')}}");
      //   }
      //   else if(menu == 'product'){
      //     $('.tampilkan').load("{{URL::to('Template_dom/product.html')}}");
      //   }
      //   })
      // })

      </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
