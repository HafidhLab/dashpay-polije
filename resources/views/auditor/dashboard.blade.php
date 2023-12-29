<x-app-layout>

    <div>

        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Dashboard</h2>
                <p class="mb-0">Your web analytics dashboard template.</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    New Plan
                </a>
            </div>
        </div>
    
    
        {{-- Card --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
              <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                  <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
                  >
                    <div
                      class="icon-shape icon-shape-primary rounded me-4 me-sm-0"
                    >
                      <svg
                        class="icon"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                        ></path>
                      </svg>
                    </div>
                    <div class="d-sm-none">
                      <h2 class="h5">Customers</h2>
                      <h3 class="fw-extrabold mb-1">345,678</h3>
                    </div>
                  </div>
                  <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                      <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                      <h3 class="fw-extrabold mb-2">345k</h3>
                    </div>
                    <div class="small d-flex mt-1">
                      <div>
                        Since last month
                        <svg
                          class="icon icon-xs text-success"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd"
                          ></path></svg
                        ><span class="text-success fw-bolder">22%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">No</th>
                        <th class="border-gray-200">Nama Merchant</th>						
                        <th class="border-gray-200">Tanggal Dibuat</th>
                        <th class="border-gray-200">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($merchants as $merchant)
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                {{ $loop->iteration }}
                            </a>
                        </td>
                        <td>
                            <span class="fw-normal">{{ $merchant->name }}</span>
                        </td>
                        <td><span class="fw-normal">{{ $merchant->created_at }}</span></td>
                        <td>
                          {{-- <a class="btn btn-primary btn-sm" href="{{ route('auditor.show', $merchant->name)  }}"><span class="fas fa-eye me-2"></span>View Details</a> --}}
                        </td>
                    </tr>
                    @endforeach                              
                </tbody>
            </table>
        </div>
        
    
    </div>
    

</x-app-layout>