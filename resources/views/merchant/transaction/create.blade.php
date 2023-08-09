<x-app-layout>   
    <x-breadcumb/>
    
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form action="{{ route('merchant.transaction.store') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="row">
                        <x-forms.input 
                            name="user_id"
                            label="User Pembeli"
                            placeholder="Pilih User"
                            type="text"
                            required
                            />
                        <x-forms.input
                            name="name_item"
                            label="Nama barang"
                            placeholder="Nama Barang"
                            type="text"
                            required
                            />
                    </div>
                    <div class="row align-items-center">
                        <x-forms.input
                            name="price_product"
                            label="Barang satuan"
                            placeholder="Barang Satuan"
                            type="number"
                            required
                            />
                        <x-forms.input
                            name="total"
                            label="Total barang"
                            placeholder="Total  Barang"
                            type="number"
                            required
                            />
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>