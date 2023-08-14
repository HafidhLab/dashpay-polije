<x-app-layout>
    <x-breadcumb/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Form Ubah Barang</h2>
                <form action="{{ route('merchant.product.update', $product->id) }}" method="POST" autocomplete="off">
                    @csrf
                    @method('PUT')
                    @include('merchant.product.partials.form-control')
                </form>
            </div>
        </div>
    </div>

</x-app-layout>