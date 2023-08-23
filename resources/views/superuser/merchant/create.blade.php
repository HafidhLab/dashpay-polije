<x-app-layout>

    <x-breadcumb title="Tambah Mechant"/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('superuser.store.merchant') }}" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <x-forms.input
                        name="name_merchant"
                        label="Nama Merchant"
                        placeholder="Masukkan Nama Merchant ..."
                        type="text"
                        required
                    />
                    <x-forms.input
                        name="phone"
                        label="Nomor Hp"
                        placeholder="Masukkan Nomor Hp ..."
                        type="number"
                        required
                    />
                    <x-forms.input
                        name="person_responsible"
                        label="Penanggung Jawab Merchant"
                        placeholder="Masukkan Penanggung Jawab Merchant ..."
                        type="text"
                        required
                    />
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>