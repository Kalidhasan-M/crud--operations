<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("Order Page") }}
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary  justify-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-left: 1050px">+Add New Order</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">New Order</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="modal-body">
        <form class=" g-3 justify-center">

            <div class="">
            <div class="">
              <label for="inputEmail4" class="form-label">User Id</label>
              <input type="name" class="form-control" id="inputEmail4">
            </div>
            <div class=" " >
              <label for="inputPassword4" class="form-label">product_id</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class=" ">
            <label for="inputZip" class="form-label">quantity</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
            <div class=" ">
              <label for="inputCity" class="form-label">status</label>
              <input type="text" class="form-control" id="inputCity"></input>
            </div>
            <div class=" ">
              <label for="inputCity" class="form-label">created_at</label>
              <input type="number" class="form-control" id="inputCity"></input>
            </div>
          </form>
    </div>
    <div class="modal-footer mt-2">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ml-2">Create</button>
    </div>
  </div>
</div>
        
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">User Nmae</th>
        <th scope="col">product Name</th>
        <th scope="col">quantity</th>
        <th scope="col">Status</th>
        <th scope="col">created At</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>  
    
</x-app-layout>
