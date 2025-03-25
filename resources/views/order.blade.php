<x-app-layout>
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

  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-left: 1020px">
      + Add New Order
  </button>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">New Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
          <form action="{{ route('orders.store') }}" method="POST" class="g-3">
              @csrf
              {{-- <div class="mb-3">
                  <label for="user_name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="user_name" name="user_name" required>
              </div> --}}
              <div class="mb-3">
                <label for="user_id" class="form-label">User Name</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="product_id" class="form-label">Products</label>
              <select class="form-control" id="product_id" name="product_id" required>
                  <option value="">Select Product</option>
                  @foreach ($products as $product)
                      <option value="{{ $product->id }}">{{ $product->name }}</option>
                  @endforeach
              </select>
          </div>
          
              <div class="mb-3">
                  <label for="quantity" class="form-label">Quantity</label>
                  <input type="number" class="form-control" id="quantity" name="quantity" required>
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                  <option value="pending">Pending</option>
                  <option value="placed">Placed</option>
                </select>
              </div>
              
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Close</button>
                  <button type="submit" class="btn btn-primary">Create</button>
              </div>
          </form>
      </div>
  </div>

  <table class="table">
      <thead>
          <tr>
              <th>S.No</th>
              <th>User Name</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Action</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
          @foreach ($orders as $order)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $order->user->name }}</td>
                  <td>{{ $order->product->name }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->status }}</td>
                  <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                  <td> <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
        <td> <a href="{{ route('orders.delete', $order->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</x-app-layout>
