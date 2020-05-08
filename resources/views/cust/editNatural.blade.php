<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Hello, world!</title>

    <style>
    .toper{
      border: 1px solid;
      border-color: gray;
    }
      .headeres{
        background-color: #33A532;
      }
      .searching{
        border-radius: 10px;
        width: 600px;
      }
      .i-search{
        position: relative;
        margin-left: -40px;
      }
      .side-bar{
        border: 1px solid;
        border-color: gray;

      }
      .main-content{
        border: 1px solid;
        border-color: gray;
      }
    </style>
  </head>
  <body>
    <!-- HEADER -->

    <div class="headeres">
        <div class="row">
          <div class="col-8">
            <marquee class="text-white my-2"> Selamat Datang Di My Website
            </marquee>
          </div>

          <div class="col-4">
            <div class="btn-group" data-toggle="buttons">
              <a href="#" class=" btn text-white active"> <i class="fa fa-podcast"></i> Blog </a>
            </div>
            <div class="btn-group" data-toggle="buttons">
              <a href="#" class=" btn text-white active"> <i class="fa fa-bullhorn"></i> Promotion </a>
            </div>
            <div class="btn-group" data-toggle="buttons">
              <a href="#" class=" btn text-white active"> <i class="fa fa-bullseye"></i> All Products </a>
            </div>

          </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <div class="container toper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> <i class="fa fa-leaf"> Natural Farm</i> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li>
            <input type="search" class="searching ml-4" placeholder="  search . . . ">
          </li>
          <li>
            <i class="fa fa-search btn i-search"></i>
          </li>
          <li>
            <a href="#"> <i class="fa fa-shopping-bag ml-4 text-dark"></i> </a>
          </li>
          <li>
            <a href="#" class="btn text-dark ml-4"> Login</a>
          </li>
          <li>
            <a href="#" class="btn btn-info ml-4"> Registration Member</a>
          </li>
        </ul>
      </div>
    </nav>

    </div>
  </div>

    <!-- MENU BAR -->
    <div class="container mb-2 toper">
      <div class="row">
        <div class="col-1 mr-3">
          <a href="#"class="btn text-dark "> <i class="fa fa-reddit-alien text-dark"></i> Childern & <br> Baby </a>
        </div>
        <div class="col-1 mx-3">
          <a href="#"class="btn text-dark "> <i class="fa fa-cutlery text-dark"></i> Healthy food <br> Drink </a>
        </div>
        <div class="col-1 mx-4">
          <a href="#"class="btn text-dark "> <i class="fa fa-medkit text-dark"></i> Personal <br> Care </a>
        </div>
        <div class="col-1 mx-2">
          <a href="#"class="btn text-dark "> <i class="fa fa-flask text-dark"></i> Sports & <br> Nutrition </a>
        </div>
        <div class="col-1 mx-3">
          <a href="#"class="btn text-dark "> <i class="fa fa-child text-dark"></i> Vitamins & <br> Supplements </a>
        </div>
        <div class="col-1 mx-3">
          <a href="#"class="btn text-dark "> <i class="fa fa-tachometer text-dark"></i> Weight & <br> Managements </a>
        </div>
        <div class="col-1 mx-3">
          <a href="#"class="btn text-dark "> <i class="fa fa-smile-o text-dark"></i> Special Bundle <br> & Hampers </a>
        </div>
        <div class="col-1 ml-5">
          <a href="#"class="btn text-dark "> <i class="fa fa-check-circle-o text-dark"></i> Brands </a>
        </div>
        <div class="col-1">
          <a href="#"class="btn text-dark "> <i class="fa fa-percent text-dark"></i> Sale </a>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
     <!-- SIDE BAR -->
     <div class="container">
       <div class="row">
         <div class="col-3 side-bar mr-5 ml-3 ">
           <h5 class="my-2 mx-2"><strong>Catagory</strong></h5>
           <div class="custom-control custom-checkbox my-2">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Childern & Baby</label>
            </div>
            <div class="custom-control custom-checkbox my-2">
               <input type="checkbox" class="custom-control-input" id="customCheck2">
               <label class="custom-control-label" for="customCheck2">Healthy Food & Drink</label>
             </div>
             <div class="custom-control custom-checkbox my-2">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">Personal Care</label>
              </div>
              <div class="custom-control custom-checkbox my-2">
                 <input type="checkbox" class="custom-control-input" id="customCheck4">
                 <label class="custom-control-label" for="customCheck4">Sports & Nutrition</label>
              </div>
              <div class="custom-control custom-checkbox my-2">
                <input type="checkbox" class="custom-control-input" id="customCheck5">
                <label class="custom-control-label" for="customCheck5">Vitamins & Suplements</label>
              </div>
              <div class="custom-control custom-checkbox my-2">
                <input type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" for="customCheck6">Weight & Managements</label>
              </div>
                <div class="custom-control custom-checkbox my-2">
                <input type="checkbox" class="custom-control-input" id="customCheck7">
                <label class="custom-control-label" for="customCheck7">Special Bundle & Humpers</label>
              </div>
              <h5 class="my-2 mx-2"> <strong> Brands </strong> </h5>
         </div>

         <!-- MAIN CONTENT -->
         <div class="col-7 main-content ml-4">
           <h5 class="my-2 mx-2"> <strong>Details Member </strong> </h5>
           <input type="submit" class="btn btn-primary float-right  " value="Save" > <br>
           <div class="row">
           <div class="col">
             <form>
               <input class="form-control text-center my-3" type="text" value="Member Name" >
               <input class="form-control text-center my-3" type="text" value="Email" >
               <input class="form-control text-center my-3" type="text" value="Member Points" readonly >


           </div>
           <div class="col">
             <textarea class="form-control my-4" rows="5" value="addres" > address member </textarea>
           </form>
           </div>
         </div>
         </div>

       </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
