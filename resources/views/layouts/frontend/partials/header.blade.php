<div class="pb-2 top-bar mb-3">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-lg-9">
                
            </div>

            <div class="col-6 col-lg-3 text-right">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="small">
                            <span class="icon-person"></span>
                            Dashbord
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="small mr-3">
                            <span class="icon-lock"></span>
                            Connexion
                        </a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="small">
                                <span class="icon-person"></span>
                                Register
                            </a>
                        @endif --}}
                    @endauth
                @endif
            </div>

        </div>
    </div>
</div>