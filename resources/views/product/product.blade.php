@extends('layouts.index')

@section('content')
    <div class="container">
      <h2 class="text-center">Product Management</h2>
      <button type="button" class="btn btn-info my-2" data-toggle="modal" data-target="#newProduct">Add New Product</button>
      <table class="table table-bordered">
        <thead class="thead-dark text-center">
          <tr>
            <th >Product Name</th>
            <th >Tittle</th>
            <th >Price</th>
            <th >Option</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($product as $p)
          <tr>
            <td>{{ $p->product_name }}</td>
            <td>{{ $p->product_tittle }}</td>
            <td>Rp.{{ $p->product_price }},-</td>
            <td>
              <a href="/editUser/{{ $p->product_id }}" class="btn btn-info">Edit</a>
              <a href="/deleteUser/{{ $p->product_id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>

        <!-- Modal -->
      	<div id="newProduct" class="modal fade" role="dialog">
      		<div class="modal-dialog">
      			<!-- konten modal-->
      			<div class="modal-content">
      				<!-- heading modal -->
      				<div class="modal-header">
                <h4 class="modal-title">Add New Product</h4>
      					<button type="button" class="close" data-dismiss="modal">&times;</button>
      				</div>
      				<!-- body modal -->
      				<div class="modal-body">
                <div class="container">
                    {{ csrf_field() }}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label> Name</label>
                        <input type="text" class="form-control" name="userName" required placeholder="Name">
                      </div>
                      <div class="form-group col-md-6">
                        <div class="form-group">
                          <label>Price</label>
                          <input type="number" class="form-control" name="userPhone" required placeholder="Phone Number ">
                        </div>
                      </div>
                    </div>
                    </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <div class="form-group">
                            <label>Tittle</label>
                            <textarea class="form-control" name="userAddress" rows="3" cols="30"></textarea>
                          </div>
                        </div>
                </div>
                <input type="submit" class="btn btn-success float-right my-2" value="save">

      				</div>
      				<!-- footer modal -->
      				<div class="modal-footer">
      					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
      				</div>
      			</div>
      		</div>
      	</div>

</div>

@endsection
