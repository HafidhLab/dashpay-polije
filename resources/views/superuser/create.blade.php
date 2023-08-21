<x-app-layout>

    <x-breadcumb title="Tambah Pengguna"/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('superuser.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <x-forms.input
                        name="name"
                        label="Nama Lengkap"
                        placeholder="Masukkan Nama Lengkap..."
                        type="text"
                        required
                        />

                        @error('name')
                            {{ $message }}
                        @enderror
                        <x-forms.input
                        name="email"
                        label="Email"
                        placeholder="Masukkan Email ..."
                        type="email"
                        required
                        />
                        @error('email')
                            {{ $message }}
                        @enderror
                        <div class="col-md-6 mb-3">
                            <label for="role">Role</label>
                            <select name="role_id" id="role" class="form-control">
                                <option value="0">-- Pilih --</option>
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}">{{ $role }}</option>
                                @endforeach
                            </select>

                            @error('role_id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>