<x-app-layout>
    <div class="container mt-4">
        <h2>Edit User</h2>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" name="role" required>
                    <option value="Super Admin" {{ $user->role == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                    <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                    <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
