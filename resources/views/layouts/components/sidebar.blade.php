<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
      <img
        class="navbar-brand-dark"
        src="../../assets/img/brand/light.svg"
        alt="Volt logo"
      />
      <img
        class="navbar-brand-light"
        src="../../assets/img/brand/dark.svg"
        alt="Volt logo"
      />
    </a>
    <div class="d-flex align-items-center">
      <button
        class="navbar-toggler d-lg-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav
    id="sidebarMenu"
    class="sidebar d-lg-block bg-gray-800 text-white collapse"
    data-simplebar
  >
    <div class="sidebar-inner px-4 pt-3">
      <div
        class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4"
      >
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img
              src="../../assets/img/team/profile-picture-3.jpg"
              class="card-img-top rounded-circle border-white"
              alt="Bonnie Green"
            />
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, {{ Auth::user()->name }}</h2>
            <a
              href="../../pages/examples/sign-in.html"
              class="btn btn-secondary btn-sm d-inline-flex align-items-center"
            >
              <svg
                class="icon icon-xxs me-1"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
              <path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"> </path>
              </svg>
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a
            href="#sidebarMenu"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="true"
            aria-label="Toggle navigation"
          >
            <svg
              class="icon icon-xs"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a
            href="#"
            class="nav-link d-flex align-items-center"
          >
            {{-- <span class="sideba`r-icon">
              <img
                src="#"
                height="20"
                width="20"
                alt="Volt Logo"
              />
            </span> --}}
            <span class="mt-1 ms-1 sidebar-text">Polijepay</span>
          </a>
        </li>
        @php
            $merchant = Auth::user()->hasRole('merchant');
            $user = Auth::user()->hasRole('user');
            $superuser = Auth::user()->hasRole('superuser');
        @endphp 
        <li class="nav-item">
          <a href="
            
            @if($merchant)
              {{ route('merchant.dashboard') }}
            @elseif($user)
              {{ route('user.dashboard') }}
            @elseif($superuser)
              {{ route('superuser.dashboard') }}
            @endif
          " class="nav-link">

            <span class="sidebar-icon">
              <svg
                class="icon icon-xs me-2"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
            </span>
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>

        @role('merchant')
        <li class="nav-item">
          <a
            href="{{ route('merchant.product.index') }}"
            class="nav-link d-flex justify-content-between"
          >
            <span>
              <span class="sidebar-icon">
                <svg
                  class="icon icon-xs me-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
              </span>
              <span class="sidebar-text">Produk</span>
            </span>
          </a>
        </li>
        
        <li class="nav-item">
          <a
            href="{{ route('merchant.topup.index') }}"
            class="nav-link d-flex justify-content-between"
          >
            <span>
              <span class="sidebar-icon">
                <svg
                  class="icon icon-xs me-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z"></path>

                </svg>
              </span>
              <span class="sidebar-text">Top Up</span>
            </span>
          </a>
        </li>
        @endrole
      </ul>
    </div>
  </nav>
