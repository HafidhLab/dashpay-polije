<x-app-layout>
    <x-breadcumb/>

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex justify-content-between">
            <h2 class="h5">List Transaksi</h2>
            <a href="#" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Bill For</th>						
                    <th class="border-gray-200">Issue Date</th>
                    <th class="border-gray-200">Due Date</th>
                    <th class="border-gray-200">Total</th>
                    <th class="border-gray-200">Status</th>
                    <th class="border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456478
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 May 2020</span></td>                        
                    <td><span class="fw-normal">1 Jun 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-warning">Due</span></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm">
                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                </span>
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu py-0">
                                <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</x-app-layout>