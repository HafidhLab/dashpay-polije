<x-app-layout>
    <x-breadcumb/>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h2 class="h5">List Transaksi Pembayaran</h2>
                        {{-- <a href="{{ route('merchant.transaction.create') }}" class="btn btn-primary btn-sm">Tambah</a> --}}
                    </div>
                </div>
                <div class="card-body border-0 shadow table-wrapper">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-gray-200">#</th>						
                                <th class="border-gray-200">Nama Barang</th>
                                <th class="border-gray-200">Barang satuan</th>
                                <th class="border-gray-200">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            @foreach ($listTransaksi as $transaction)
                            <tr>
                                <td>
                                    <a href="#" class="fw-bold">
                                        {{ $loop->iteration }}
                                    </a>
                                </td>
                                <td><span class="fw-normal">{{ $transaction->name_item }}</span></td>                        
                                <td><span class="fw-normal">{{ $transaction->price_product }}</span></td>
                                <td><span class="fw-bold">{{ $transaction->total }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h2 class="h5">List Transaksi Top-up</h2>
                        {{-- <a href="{{ route('merchant.transaction.create') }}" class="btn btn-primary btn-sm">Tambah</a> --}}
                    </div>
                </div>
                <div class="card-body border-0 shadow table-wrapper">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-gray-200">#</th>
                                <th class="border-gray-200">Amount</th>
                                <th class="border-gray-200">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            @foreach ($listTopup as $topup)
                            <tr>
                                <td>
                                    <a href="#" class="fw-bold">
                                        {{ $loop->iteration }}
                                    </a>
                                </td>
                                <td>
                                    <span class="fw-normal">{{ $topup->amount }}</span>
                                </td>
                                <td>
                                    <span class="fw-normal">{{ $topup->created_at }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>