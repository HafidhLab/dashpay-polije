<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Sign in to Dashpay Polije</h1>
                        </div>

                         <form method="POST" action="{{ route('login') }}" class="mt-4">
                            @csrf
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="example@gmail.com" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" type="password" name="password" :value="old('password')" placeholder="****" required autofocus autocomplete="password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                          Remember me
                                        </label>
                                    </div>
                                    <div><a href="{{ route('password.request') }}" class="small text-right">{{ __('Lost Password?') }}</a></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">{{ __('Sign In') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Session Status -->
</x-guest-layout>
