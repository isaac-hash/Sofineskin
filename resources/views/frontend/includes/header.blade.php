<style>
    .a {
        color: black;
        text-decoration: none;
        font-weight: bold;
    }

    .a:hover {
        color: navy;
    }
</style>
<!-- Navbar -->
@foreach($utilities as $key => $utilities)
<div class="navbar-div">
    <div class="inner-nav-outline-div">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!--Menu Bar-->
                <div class="nav-menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!--Logo-->
                <a class="a" href="{{route('/')}}">
                    <img style="width: 80px;" src="../assets/img/{{$utilities->top_logo}}" alt="" class="logo" />
                </a>

                <!-- Side Navigation -->
                <div class="offcanvas offcanvas-start w-75 h-75" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" style="font-size: 1.5rem;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body justify-content-center flex-grow-1 pe-3 gap-1">
                        <ul class="navbar-nav">


                            @foreach($category as $index => $categories)
                            @if($index < 7) <!-- <li><a href="#">Brands</a></li> -->

                                <li class="nav-item mb-3">
                                    <a class="a" class="nav-link mx-lg-2 active" aria-current="page" href="{{route('filter', $categories->category_name)}}">{{$categories->category_name}}</a>

                                </li>
                                @endif
                                @endforeach

                                @if (Route::has('login'))
                            @auth
                            @if(Auth::user()->usertype == 'ad_1e')
                            <hr>

                            <li class="nav-item mb-3">
                                    <a class="a" class="nav-link mx-lg-2 active" aria-current="page" href="{{route('admin-dashboard')}}">Dashboard</a>

                                </li>
                            @endif
                            @endauth
                            @endif

                        </ul>
                        <div class="enquiries-div">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.96 10.6004C16.96 11.7249 16.5133 12.8033 15.7181 13.5985C14.923 14.3936 13.8445 14.8404 12.72 14.8404C11.5955 14.8404 10.517 14.3936 9.72185 13.5985C8.92669 12.8033 8.47998 11.7249 8.47998 10.6004C8.47998 9.47583 8.92669 8.39737 9.72185 7.60222C10.517 6.80706 11.5955 6.36035 12.72 6.36035C13.8445 6.36035 14.923 6.80706 15.7181 7.60222C16.5133 8.39737 16.96 9.47583 16.96 10.6004Z" fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2876 23.3116C6.63413 23.0848 2.12012 18.4293 2.12012 12.7201C2.12012 6.86574 6.86574 2.12012 12.7201 2.12012C18.5745 2.12012 23.3201 6.86574 23.3201 12.7201C23.3201 18.5745 18.5745 23.3201 12.7201 23.3201C12.6717 23.3204 12.6233 23.3204 12.5749 23.3201C12.479 23.3201 12.383 23.3169 12.2876 23.3116ZM5.9181 19.4087C5.83884 19.1811 5.81187 18.9386 5.83917 18.6991C5.86647 18.4597 5.94736 18.2295 6.07581 18.0256C6.20427 17.8216 6.377 17.6493 6.58119 17.5213C6.78538 17.3932 7.01578 17.3129 7.25529 17.2861C11.3872 16.8287 14.0785 16.87 18.1902 17.2956C18.4301 17.3206 18.661 17.4 18.8656 17.5277C19.0701 17.6554 19.2427 17.8281 19.3704 18.0327C19.4981 18.2372 19.5774 18.4682 19.6023 18.7081C19.6272 18.9479 19.5971 19.1902 19.5142 19.4167C21.2764 17.6337 22.2633 15.227 22.2601 12.7201C22.2601 7.45139 17.9888 3.18012 12.7201 3.18012C7.45139 3.18012 3.18012 7.45139 3.18012 12.7201C3.18012 15.3256 4.22475 17.6873 5.9181 19.4087Z" fill="black" />
                            </svg>
                            @if (Route::has('login'))
                            @auth
                            <a class="a" href="{{url('logout')}}" class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Logout - {{Auth::user()->fname}}</a>

                            @else
                            <a class="a" href="{{route('login')}}" class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Login</a>
                            @endauth
                            @endif

                            @if (Route::has('login'))
                            @auth
                            @if(Auth::user()->usertype == 'ad_1e')

                            <a class="a" href="{{route('admin-dashboard')}}">Dashboard</a>

                            @endif
                            @endauth
                            @endif

                            <br>
                            <br>


                            <div class="contact-info">
                                <p>Contact Us:</p>
                                <br>

                                <div class="call-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <path d="M3.29599 7.33836C4.6071 9.91505 6.71945 12.0183 9.29615 13.3385L11.2992 11.3354C11.5451 11.0896 11.9093 11.0076 12.2279 11.1169C13.2477 11.4538 14.3494 11.6359 15.4784 11.6359C15.9792 11.6359 16.3889 12.0456 16.3889 12.5464V15.724C16.3889 16.2248 15.9792 16.6345 15.4784 16.6345C6.92886 16.6345 0 9.70564 0 1.1561C0 0.655328 0.409722 0.245605 0.910494 0.245605H4.09722C4.598 0.245605 5.00772 0.655328 5.00772 1.1561C5.00772 2.29422 5.18982 3.38681 5.5267 4.40656C5.62685 4.72524 5.55401 5.08033 5.29908 5.33527L3.29599 7.33836Z" fill="black" />
                                    </svg>
                                    <span>Call/DM: {{$utilities->phone_number}}</span>
                                </div>
                                <div class="call-div" id="email-span">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                                        <path d="M17.34 0.395508H2.1675C1.59264 0.395508 1.04133 0.623869 0.634846 1.03035C0.228361 1.43684 0 1.98815 0 2.56301V12.3168C0 12.8916 0.228361 13.4429 0.634846 13.8494C1.04133 14.2559 1.59264 14.4843 2.1675 14.4843H17.34C17.9148 14.4843 18.4662 14.2559 18.8726 13.8494C19.2791 13.4429 19.5075 12.8916 19.5075 12.3168V2.56301C19.5075 1.98815 19.2791 1.43684 18.8726 1.03035C18.4662 0.623869 17.9148 0.395508 17.34 0.395508ZM6.84496 8.32422L8.58113 9.84147C8.91167 10.1297 9.33 10.2728 9.75375 10.2728C10.1775 10.2728 10.5958 10.1287 10.9264 9.84147L12.6625 8.32422L12.6224 8.36432L16.5738 12.3157H2.93371L6.88506 8.36432L6.84496 8.32422ZM2.1675 11.5505V4.23198L6.07117 7.64687L2.1675 11.5505ZM13.4363 7.64687L17.34 4.23198V11.5473L13.4363 7.64687ZM17.34 2.56301V2.79059L10.2133 9.02649C10.0827 9.13059 9.92071 9.18729 9.75375 9.18729C9.58678 9.18729 9.42477 9.13059 9.29424 9.02649L2.1675 2.79059V2.56301H17.34Z" fill="black" />
                                    </svg>
                                    <span>Email: {{$utilities->mail}}</span>
                                </div>
                            </div>
                        </div>


                        <!-- Search Input  Desktop View-->
                        <div class="input-group d-none d-md-flex" id="search-input">
                            <svg style="position: absolute;
                  top: calc(30%);
                  left: 1rem;
                  " width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 13.86H14.7546L14.4018 13.5198C15.6793 12.0381 16.3814 10.1464 16.38 8.19C16.38 6.57017 15.8997 4.98672 14.9997 3.63988C14.0998 2.29305 12.8207 1.24331 11.3242 0.62343C9.82765 0.0035486 8.18092 -0.158641 6.59221 0.157372C5.00351 0.473385 3.54419 1.25341 2.3988 2.3988C1.25341 3.54419 0.473385 5.00351 0.157372 6.59221C-0.158641 8.18092 0.0035486 9.82765 0.62343 11.3242C1.24331 12.8207 2.29305 14.0998 3.63988 14.9997C4.98672 15.8997 6.57017 16.38 8.19 16.38C10.2186 16.38 12.0834 15.6366 13.5198 14.4018L13.86 14.7546V15.75L20.16 22.0374L22.0374 20.16L15.75 13.86ZM8.19 13.86C5.0526 13.86 2.52 11.3274 2.52 8.19C2.52 5.0526 5.0526 2.52 8.19 2.52C11.3274 2.52 13.86 5.0526 13.86 8.19C13.86 11.3274 11.3274 13.86 8.19 13.86Z" fill="#656565" />
                            </svg>


                            <form action="{{route('search')}}" method="POST">
                                @csrf
                                <input type="search" name="search_form" placeholder="Search Products, Brands..." style="outline: none; border: none;">
                            </form>



                        </div>

                    </div>
                </div>

                <!--User/Shop Icons-->
                <div class="right-icons">
                    <!-- Account Icon Div -->


                    <div class="dashboard">
                        @if (Route::has('login'))
                        @auth

                        <a class="a" href="{{url('logout')}}" class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.96 10.6004C16.96 11.7249 16.5133 12.8033 15.7181 13.5985C14.923 14.3936 13.8445 14.8404 12.72 14.8404C11.5955 14.8404 10.517 14.3936 9.72185 13.5985C8.92669 12.8033 8.47998 11.7249 8.47998 10.6004C8.47998 9.47583 8.92669 8.39737 9.72185 7.60222C10.517 6.80706 11.5955 6.36035 12.72 6.36035C13.8445 6.36035 14.923 6.80706 15.7181 7.60222C16.5133 8.39737 16.96 9.47583 16.96 10.6004Z" fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2876 23.3116C6.63413 23.0848 2.12012 18.4293 2.12012 12.7201C2.12012 6.86574 6.86574 2.12012 12.7201 2.12012C18.5745 2.12012 23.3201 6.86574 23.3201 12.7201C23.3201 18.5745 18.5745 23.3201 12.7201 23.3201C12.6717 23.3204 12.6233 23.3204 12.5749 23.3201C12.479 23.3201 12.383 23.3169 12.2876 23.3116ZM5.9181 19.4087C5.83884 19.1811 5.81187 18.9386 5.83917 18.6991C5.86647 18.4597 5.94736 18.2295 6.07581 18.0256C6.20427 17.8216 6.377 17.6493 6.58119 17.5213C6.78538 17.3932 7.01578 17.3129 7.25529 17.2861C11.3872 16.8287 14.0785 16.87 18.1902 17.2956C18.4301 17.3206 18.661 17.4 18.8656 17.5277C19.0701 17.6554 19.2427 17.8281 19.3704 18.0327C19.4981 18.2372 19.5774 18.4682 19.6023 18.7081C19.6272 18.9479 19.5971 19.1902 19.5142 19.4167C21.2764 17.6337 22.2633 15.227 22.2601 12.7201C22.2601 7.45139 17.9888 3.18012 12.7201 3.18012C7.45139 3.18012 3.18012 7.45139 3.18012 12.7201C3.18012 15.3256 4.22475 17.6873 5.9181 19.4087Z" fill="black" />
                            </svg>

                            <span class="account-span">Logout</span>
                            <span class="account-span">- {{Auth::user()->fname}}</span>


                        </a>
                        @else

                        <a class="a" href="{{route('login')}}" class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.96 10.6004C16.96 11.7249 16.5133 12.8033 15.7181 13.5985C14.923 14.3936 13.8445 14.8404 12.72 14.8404C11.5955 14.8404 10.517 14.3936 9.72185 13.5985C8.92669 12.8033 8.47998 11.7249 8.47998 10.6004C8.47998 9.47583 8.92669 8.39737 9.72185 7.60222C10.517 6.80706 11.5955 6.36035 12.72 6.36035C13.8445 6.36035 14.923 6.80706 15.7181 7.60222C16.5133 8.39737 16.96 9.47583 16.96 10.6004Z" fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2876 23.3116C6.63413 23.0848 2.12012 18.4293 2.12012 12.7201C2.12012 6.86574 6.86574 2.12012 12.7201 2.12012C18.5745 2.12012 23.3201 6.86574 23.3201 12.7201C23.3201 18.5745 18.5745 23.3201 12.7201 23.3201C12.6717 23.3204 12.6233 23.3204 12.5749 23.3201C12.479 23.3201 12.383 23.3169 12.2876 23.3116ZM5.9181 19.4087C5.83884 19.1811 5.81187 18.9386 5.83917 18.6991C5.86647 18.4597 5.94736 18.2295 6.07581 18.0256C6.20427 17.8216 6.377 17.6493 6.58119 17.5213C6.78538 17.3932 7.01578 17.3129 7.25529 17.2861C11.3872 16.8287 14.0785 16.87 18.1902 17.2956C18.4301 17.3206 18.661 17.4 18.8656 17.5277C19.0701 17.6554 19.2427 17.8281 19.3704 18.0327C19.4981 18.2372 19.5774 18.4682 19.6023 18.7081C19.6272 18.9479 19.5971 19.1902 19.5142 19.4167C21.2764 17.6337 22.2633 15.227 22.2601 12.7201C22.2601 7.45139 17.9888 3.18012 12.7201 3.18012C7.45139 3.18012 3.18012 7.45139 3.18012 12.7201C3.18012 15.3256 4.22475 17.6873 5.9181 19.4087Z" fill="black" />
                            </svg>

                            <span class="account-span">Account</span>


                        </a>
                        @endauth
                        @endif


                        @if (Route::has('login'))
                        @auth
                        @if(Auth::user()->usertype == 'ad_1e')

                        <a class="a" href="{{route('admin-dashboard')}}">Dashboard</a>

                        @endif
                        @endauth
                        @endif
                    </div>



                    <!-- Cart Icon Div -->
                    <a class="a" href="{{ route('view_cart') }}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                            <path d="M2.55559 24.5102C1.95299 24.5102 1.44995 24.3084 1.04647 23.905C0.642118 23.5006 0.439941 22.9971 0.439941 22.3945V8.28583C0.439941 7.68323 0.642118 7.18019 1.04647 6.77671C1.44995 6.37235 1.95299 6.17018 2.55559 6.17018H5.02494V5.51518C5.02494 4.24186 5.47078 3.15936 6.36245 2.26769C7.25413 1.37601 8.33662 0.930176 9.60994 0.930176C10.8833 0.930176 11.9658 1.37601 12.8574 2.26769C13.7491 3.15936 14.1949 4.24186 14.1949 5.51518V6.17018H16.6643C17.2669 6.17018 17.7699 6.37235 18.1734 6.77671C18.5778 7.18019 18.7799 7.68323 18.7799 8.28583V22.3945C18.7799 22.9971 18.5782 23.5002 18.1747 23.9036C17.7704 24.308 17.2669 24.5102 16.6643 24.5102H2.55559ZM2.55559 23.2002H16.6643C16.8652 23.2002 17.0499 23.1163 17.2184 22.9487C17.3861 22.7801 17.4699 22.5954 17.4699 22.3945V8.28583C17.4699 8.08496 17.3861 7.90025 17.2184 7.7317C17.0499 7.56402 16.8652 7.48018 16.6643 7.48018H14.1949V10.7552C14.1949 10.9412 14.1325 11.0971 14.0076 11.2228C13.8819 11.3477 13.726 11.4102 13.5399 11.4102C13.3539 11.4102 13.198 11.3477 13.0723 11.2228C12.9474 11.0971 12.8849 10.9412 12.8849 10.7552V7.48018H6.33494V10.7552C6.33494 10.9412 6.2725 11.0971 6.14761 11.2228C6.02185 11.3477 5.86596 11.4102 5.67994 11.4102C5.49392 11.4102 5.33803 11.3477 5.21227 11.2228C5.08738 11.0971 5.02494 10.9412 5.02494 10.7552V7.48018H2.55559C2.35472 7.48018 2.17001 7.56402 2.00146 7.7317C1.83378 7.90025 1.74994 8.08496 1.74994 8.28583V22.3945C1.74994 22.5954 1.83378 22.7801 2.00146 22.9487C2.17001 23.1163 2.35472 23.2002 2.55559 23.2002ZM6.33494 6.17018H12.8849V5.51518C12.8849 4.59294 12.5697 3.81654 11.9391 3.186C11.3086 2.55545 10.5322 2.24018 9.60994 2.24018C8.6877 2.24018 7.91131 2.55545 7.28076 3.186C6.65022 3.81654 6.33494 4.59294 6.33494 5.51518V6.17018Z" fill="black" />
                        </svg>
                        @if(Auth::id())
                        @if($cart_num > '0')
                        <span class="badge text-light bg-danger">{{$cart_num}}</span>
                        @endif
                        @endif
                    </a>

                </div>
            </div>
            <!-- Mobile Search Input -->
            <div class="nav-search-input-div d-md-none mt-2" style="display: flex; align-items:center;">
                <span>
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 13.86H14.7546L14.4018 13.5198C15.6793 12.0381 16.3814 10.1464 16.38 8.19C16.38 6.57017 15.8997 4.98672 14.9997 3.63988C14.0998 2.29305 12.8207 1.24331 11.3242 0.62343C9.82765 0.0035486 8.18092 -0.158641 6.59221 0.157372C5.00351 0.473385 3.54419 1.25341 2.3988 2.3988C1.25341 3.54419 0.473385 5.00351 0.157372 6.59221C-0.158641 8.18092 0.0035486 9.82765 0.62343 11.3242C1.24331 12.8207 2.29305 14.0998 3.63988 14.9997C4.98672 15.8997 6.57017 16.38 8.19 16.38C10.2186 16.38 12.0834 15.6366 13.5198 14.4018L13.86 14.7546V15.75L20.16 22.0374L22.0374 20.16L15.75 13.86ZM8.19 13.86C5.0526 13.86 2.52 11.3274 2.52 8.19C2.52 5.0526 5.0526 2.52 8.19 2.52C11.3274 2.52 13.86 5.0526 13.86 8.19C13.86 11.3274 11.3274 13.86 8.19 13.86Z" fill="black" />
                    </svg>
                </span>
                <form action="{{route('search')}}" method="POST" class="ml-2">
                    @csrf
                    <input type="search" name="search_form" placeholder="Search Products, Brands..." style="outline: none; border: none;">
                </form>
            </div>

            
            <!-- CALL TO ORDER -->
            <div class="d-flex d-md-none mt-4" style="width: 100vw; text-align: center; margin: auto; background-color: blanchedalmond; margin-top: 0.5rem; justify-content: center; align-items: center; padding: 0.5rem;">
                <p style="font-size: 1.2rem; margin:auto;">CALL TO ORDER: {{$utilities->phone_number}}</p>
            </div>
        </nav>

        <!-- Tab Nav -->
        <ul class="Tab-Nav" style="padding: 0 1.5em;">
            @foreach($category as $index => $categorys)
            @if($index < 7) <!-- <li><a href="#">Brands</a></li> -->
                <a class="a" href="{{route('filter', $categorys->category_name)}}">
                    <li>{{$categorys->category_name}}</li>
                </a>
                @endif
                @endforeach
                <!-- <li><a class="a" href="#">Face serums</a></li>
            <li><a class="a" href="#">Body washes</a></li>
            <li><a class="a" href="#">Toners and hydrators</a></li>
            <li><a class="a" href="#">Body scrubs</a></li>
            <li><a class="a" href="#">Sunscreens</a></li>
            <li><a class="a" href="#">Face moisturizers and creams</a></li>
            <li><a class="a" href="#">Exfoliants</a></li>
            <li><a class="a" href="#">Cleansing oils and balms</a></li> -->
        </ul>
    </div>
</div>
@endforeach
@include('sweetalert::alert')
<br>