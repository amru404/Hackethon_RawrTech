<nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo"><a href="index.html"><img src="{{ asset('asset_landing/images/logo.png') }}"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="{{route('home')}}"><strong> Home </strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="{{route('user.ticket')}}"><strong> Ticket
                                </strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="{{route('user.order.data')}}"><strong> order </strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="{{route('user.transaksi.data')}}"><strong> Transaksi </strong></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="search_icon">
                            <ul>
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>