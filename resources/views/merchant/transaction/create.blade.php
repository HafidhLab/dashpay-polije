<x-app-layout>
    <x-breadcumb/>
    <x-vendor.select2/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form action="{{ route('merchant.transaction.store') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="user">Pembeli</label>
                            <select name="user_id" id="user" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Kode Barang</label>
                            <select name="code_product" id="code_product" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <x-forms.input
                            name="name"
                            label="Nama Barang"
                            placeholder="Nama Barang"
                            type="text"
                            disabled
                            required
                            />
                        <x-forms.input
                            name="qty"
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

@push('script')
<script>
    $('#user').select2({
        ajax: {
            url: '{{ route('select2.users.user') }}',
            method: 'POST',
        }
    });
    $('#code_product').select2({
        ajax: {
            url: '{{ route('select2.product') }}',
            method: 'POST',
        }
    });

    $(function(){
        $('#code_product').on('change', function(){
            var id = $(this).val()
                
            $.get(`/api/get-product-data/${id}`, function(data) {
                $('#name').val(data.name);

                $('#qty').on('keyup', function () {
                    var qty = parseInt($(this).val());
                    var total = qty * data.price;

                    $('#total').val(total);
                });
                
                if ($('qty').val() == null) {
                    $('#total').val(data.price);
                }

            }).fail(function() {
                alert('An error occurred while fetching user data');
            });  // 
        })
    })

</script>
@endpush

</x-app-layout>
