<x-app-layout>
    <x-breadcumb title="Top-Up"/>
    <x-vendor.select2/>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('merchant.topup.saldo') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="user">User</label>
                            <select name="user_id" id="user" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <x-forms.input
                            name="balance"
                            label="Saldo Saat ini"
                            placeholder=""
                            type="text"
                            required
                            readonly
                            />
                    </div>
                    <div class="row align-items-center">
                        <x-forms.input
                            name="transfer"
                            label="Jumlah Topup"
                            placeholder="Minimal Topup 10000"
                            type="number"
                            required
                            />
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Topup Sekarang</button>
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

        $(function(){
            $('#user').on('change', function(){
                var id = $(this).val()
                
                $.get(`/api/get-user-data/${id}`, function(data) {
                    $('#balance').val(data.balance);
                }).fail(function() {
                    alert('An error occurred while fetching user data');
                });
            })
        })
    </script>
    @endpush
</x-app-layout>