<x-app-layout>
    <x-breadcumb title="List Produk"/>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <a href="{{ route('merchant.product.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
            </div>
        </div>
        <div class="card-body border-0 shadow table-wrapper">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">#</th>
                        <th class="border-gray-200">Kode Barang</th>						
                        <th class="border-gray-200">Nama Barang Barang</th>
                        <th class="border-gray-200">Harga Barang Satuan</th>
                        <th class="border-gray-200">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                {{ $loop->iteration }}
                            </a>
                        </td>
                        <td>
                            <span class="fw-normal">{{ $product->code_product }}</span>
                        </td>
                        <td><span class="fw-normal">{{ $product->name }}</span></td>                        
                        <td><span class="fw-normal">{{ $product->price }}</span></td>
                        <td> 
                            <div class="btn-group">
                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm">
                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                    </span>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item" href="{{ route('merchant.product.edit', $product->id) }}"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="{{ route('merchant.product.destroy', $product->id) }}"><span class="fas fa-trash-alt me-2"></span>Hapus {{ $product->name_item }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>