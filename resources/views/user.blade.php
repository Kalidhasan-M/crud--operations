<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("User Page") }}
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary  justify-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-left: 1050px">+Add New User</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="modal-body">
            <form class=" g-3 justify-center">
    
                <div class="">
                <div class="">
                  <label for="inputEmail4" class="form-label">User name</label>
                  <input type="name" class="form-control" id="inputEmail4">
                </div>
                <div class=" " >
                  <label for="inputPassword4" class="form-label">User Email</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
                <div class=" ">
                  <label for="inputCity" class="form-label">Password</label>
                  <input type="text" class="form-control" id="inputCity"></input>
                </div>
                <div class=" ">
                  <label for="inputCity" class="form-label">Role</label>
                  <select class="form-select" id="autoSizingSelect">
                    <option selected>Choose...</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">User</option>
                  </select>
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
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td><a href="{{ route('useredit', ['id' => $user->id]) }}" class="btn btn-warning btn-sm">Edit</a></td>
            <td> <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td>  </tr>
          @endforeach
        </tbody>
      </table>    
       
    </x-app-layout>