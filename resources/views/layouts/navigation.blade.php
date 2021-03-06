<header class="sticky-top p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-md-between col-12">
            <div class="d-flex justify-content-md-around">
                <div>
                    <a href="/"
                        class="d-flex justify-content-center align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-4">ALMENT CAMPING | Outdoor Rent</span>
                    </a>

                </div>

            </div>
            <div class="d-flex justify-content-md-end">
                <div>
                    <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-4 mb-md-0 justify-content-center">
                        <li><a aria-current="page" href="/"
                                class="nav-link px-2 text-white{{ request()->is('/') ? ' active' : '' }}">HOME</a>
                        </li>

                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                EQUIPMENTS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="/equipments-main"
                                        class="nav-link px-2 text-dark{{ request()->is('equipments-main') ? ' active' : '' }}">Main
                                        Equipments</a></li>
                                <li><a href="/equipments-dine"
                                        class="nav-link px-2 text-dark{{ request()->is('equipments-dine') ? ' active' : '' }}">Dine
                                        Equipments</a></li>
                                <li><a href="/equipments-support"
                                        class="nav-link px-2 text-dark{{ request()->is('equipments-support') ? ' active' : '' }}">Support
                                        Equipments</a></li>
                            </ul>
                        </li>

                        <li><a href="/cart"
                                class="nav-link px-2 text-white{{ request()->is('cart') ? ' active' : '' }}">CART</a></li>
                        <li><a href="/faqs"
                                class="nav-link px-2 text-white{{ request()->is('faqs') ? ' active' : '' }}">FAQs</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
