<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                {{ __("products Page") }}
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary  justify-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-left: 1020px">+Add New Products</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">New products</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="modal-body">
        <form class=" g-3 justify-center" action="{{ route('products.store') }}" method='POST'>
@csrf
            <div class="">
            <div class="">
              <label for="name" class="form-label">Product Name</label>
              <input type="name" class="form-control" id="name" name="name">
            </div>
            <div class=" " >
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price">
            </div>
        </div>
        {{-- <div class=" ">
            <label for="inputZip" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputZip">
          </div> --}}
            <div class=" ">
              <label for="description" class="form-label">description</label>
              <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>
            <div class=" ">
              <label for="stock" class="form-label">Stock</label>
              <input type="number" class="form-control" id="stock" name="stock"></input>
            </div>

            <div class="modal-footer mt-2">
              <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary ml-2">Create</button>
          </div>
          </form>
    </div>
  
  </div>
</div>
        
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Product Nmae</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Stock</th>
        <th scope="col">Action</th>
        <th scope="col"></th>


      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product )
      <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->name}}</td>
        
        <td>{{ $product->price}}</td>
        <td>{{ $product->description}}</td>
        <td>{{ $product->stock}}</td>
        <td> <a href="{{ route('product_edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
        <td> <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td> 
      </tr>
      @endforeach
    </tbody>
  </table>    
   
</x-app-layout>