<x-app-layout>

    <x-breadcumb title="List Pengguna"/>

        <div class="card">
            <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
                <h2 class="h4 mb-0">List Pengguna</h2>
                <a href="/superuser/tambah-pengguna" class="btn btn-primary">Tambah Pengguna</a>    
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">User</th>
                                <th class="border-0">Email</th>
                                <th class="border-0">Role</th>
                                <th class="border-0 rounded-end">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @foreach($user->roles as $role)
                                    <td>
                                        {{ $role->name }}
                                    </td>
                                @endforeach
                                <td>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Hapus</button>
                                    @if ($user->hasRole('merchant'))
                                        <button class="text-white btn btn-success">Create Merchant</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>Maaf data masih kosong</td>
                            </tr>
                            @endforelse
                            <!-- End of Item -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-app-layout>