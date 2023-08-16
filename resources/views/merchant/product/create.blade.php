<x-app-layout>
    <x-breadcumb title="Tambah Produk"/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('merchant.product.store') }}" method="POST" autocomplete="off">
                    @csrf
                    @include('merchant.product.partials.form-control', ['btn' => 'Simpan'])
                </form>
            </div>
        </div>
    </div>

</x-app-layout>