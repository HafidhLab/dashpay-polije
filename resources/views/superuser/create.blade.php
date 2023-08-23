<x-app-layout>

    <x-breadcumb title="Tambah Pengguna"/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('superuser.store') }}" method="POST">
                    @csrf
                    @include('superuser.partials.form-control')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>