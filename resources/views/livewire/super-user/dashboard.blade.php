<div>
     {{-- Close your eyes. Count to one. That is how long forever feels. --}}
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Dashboard</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
    </div>


    <div class="card">
        <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
            <h2 class="h4 mb-0">List Pengguna</h2>
            <button wire:click="openModal" class="btn btn-primary">Buka Modal</button>

            <div class="modal show" wire:model="modalFormVisible" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Contoh Modal Livewire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Isi dari modal Livewire ini.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

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

    @push('scripts')
        <script>
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
        </script>
    @endpush
</div>
