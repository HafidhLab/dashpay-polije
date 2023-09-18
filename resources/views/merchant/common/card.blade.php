@php

$data = [
    [
        'name' => 'User',
        'count' => App\Models\User::count(),
    ],[
        'name' => 'Barang',
        'count' => App\Models\Product::count()
    ]
];

@endphp


<div class="row">
    @foreach ($data as $item)
        <div class="col-12 col-sm-6 col-xl-6 mb-4">
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
                    <h2 class="h5">{{ $item['name'] }}</h2>
                    <h3 class="fw-extrabold mb-1">{{ $item['count'] }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                    <h2 class="h6 text-gray-400 mb-0">{{ $item['name'] }}</h2>
                    <h3 class="fw-extrabold mb-2">{{ $item['count'] }}</h3>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>