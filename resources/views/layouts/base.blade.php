<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salon-hair</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>

    @livewireStyles

</head>

<body>
<nav class="bg-white shadow dark:bg-gray-800 fixed w-full top-0 z-10">
    <div class="container px-20 py-3 mx-auto">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700 h-12 overflow-hidden">
                    <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                       href="{{ route('home') }}">
                        <img src="{{ asset('storage/'. $setting->logo) }}" alt="" class=" h-12">
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="flex-1 md:flex md:items-center md:justify-between items-center">
                <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                    <a href="{{ route('reward') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">??u
                        ????i</a>
                    <a href="{{ route('service') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">D???ch
                        v???</a>
                    <a href="{{ route('shop') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">C???a
                        h??ng</a>
                    <a href="{{ route('blogs') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Tin
                        t???c</a>
                    <a href="{{ '/about' }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Gi???i
                        thi???u</a>

                </div>

                <div class="flex items-center">
                    <div class="flex justify-center px-2">
                        <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
                            <div class="flex items-center justify-end w-full ">
                                <span class="text-red-500">{{ Cart::count() }}</span>
                                <button @click="cartOpen = !cartOpen"
                                        class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>

                                <div class="flex sm:hidden">
                                    <button @click="isOpen = !isOpen" type="button"
                                            class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                            aria-label="toggle menu">
                                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                            <path fill-rule="evenodd"
                                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
                                 class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300 z-10">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
                                    <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <hr class="my-3">

                                @forelse(Cart::content() as $item)
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-gray-700 font-medium">T???ng ????n ?????t h??ng ({{ Cart::count() }}
                                            )</h3>
                                        <a href="{{ route('product.cart') }}" class="text-gray-600 hover:text-blue-500">
                                            <span class="text-sm">S???a</span>
                                        </a>
                                    </div>
                                    <div class="flex justify-between mt-6">
                                        <div class="flex">
                                            <img class="h-20 w-20 object-cover rounded"
                                                 src="{{ asset('storage/'. $item->options['img'] ) }}"
                                                 alt="">
                                            <div class="mx-3">
                                                <h3 class="text-sm text-gray-600">{{ $item->name }}</h3>
                                                <div class="flex items-center mt-2">

                                                    <button wire:click="increase"
                                                            class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                             stroke-linejoin="round" stroke-width="2"
                                                             viewBox="0 0 24 24" stroke="currentColor">
                                                            <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </button>
                                                    <span class="text-gray-700 mx-2">{{ $item->qty }}</span>
                                                    <button
                                                        class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                             stroke-linejoin="round" stroke-width="2"
                                                             viewBox="0 0 24 24" stroke="currentColor">
                                                            <path
                                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-gray-600">{{ $item->price() }}</span>
                                    </div>
                                @empty
                                    <p>Ch??a c?? s???n ph???m trong gi??? h??ng</p>
                                @endforelse
                                {{--                                <div class="mt-8">--}}
                                {{--                                    <form class="flex items-center justify-center">--}}
                                {{--                                        <input class="form-input w-48" type="text" placeholder="Add promocode">--}}
                                {{--                                        <button--}}
                                {{--                                            class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
                                {{--                                            <span>Apply</span>--}}
                                {{--                                        </button>--}}
                                {{--                                    </form>--}}
                                {{--                                </div>--}}
                                <div class="flex justify-between mt-5">
                                    <p class="font-bold">T???ng ti???n: </p>
                                    <p class="text-red-500">  {{ Cart::total() }} <sup class="">??</sup>
                                    </p>
                                </div>
                                <a href="{{ route('checkout') }}"
                                   class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                    <span>Thanh to??n</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="relative" x-data="{ open: false }">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                                <img class="h-8 w-8 rounded-full object-cover"
                                                     src="{{ Auth::user()->profile_photo_url }}"
                                                     alt="{{ Auth::user()->name }}"/>
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ Auth::user()->name }}

                                                 <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Qu???n l?? t??i kho???n') }}
                                        </div>
                                        <x-jet-dropdown-link href="{{ route('info') }}">
                                            {{ __('T??i kho???n') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('orders') }}">
                                            {{ __('????n h??ng') }}
                                        </x-jet-dropdown-link>

                                        @if(Auth::user()->id_role === '1' || Auth::user()->id_role === '2')
                                            <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                                {{ __('Qu???n tr???') }}
                                            </x-jet-dropdown-link>
                                        @elseif(Auth::user()->id_role === '3')
                                            <x-jet-dropdown-link href="{{ route('appointment') }}">
                                                {{ __('L???ch h???n') }}
                                            </x-jet-dropdown-link>
                                    @endif
                                    <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        @else
                            <div x-data="{ show: false }" @click.away="show = false" class="">
                                <button @click="show = ! show" type="button"
                                        class="flex bg-yellow-300 text-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:border-white text-sm">
                                    <span class="pr-2">????ng nh???p</span>
                                    <svg class="fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg"
                                         height="24"
                                         viewBox="0 0 24 24" width="24">
                                        <path d="M7 10l5 5 5-5z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                </button>
                                <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
                                    <div class="p-6">
                                        @if (session('message'))
                                            <div class="mb-4 font-medium text-sm text-red-600">
                                                {{ session('message') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div>
                                                <x-jet-label for="phone_number" value="{{ __('S??? ??i???n tho???i') }}"/>
                                                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text"
                                                             name="phone_number" :value="old('phone_number')" required
                                                             autofocus/>
                                            </div>

                                            <div class="mt-4">
                                                <x-jet-label for="password" value="{{ __('M???t kh???u') }}"/>
                                                <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                                             name="password" required autocomplete="current-password"/>
                                            </div>

                                            <div class="block mt-4">
                                                <label for="remember_me" class="flex items-center">
                                                    <x-jet-checkbox id="remember_me" name="remember"/>
                                                    <span
                                                        class="ml-2 text-sm text-gray-600">{{ __('Ghi nh??? ????ng nh???p') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                       href="{{ route('password.request') }}">
                                                        {{ __('Qu??n m???t kh???u?') }}
                                                    </a>
                                                @endif

                                                <x-jet-button class="ml-4">
                                                    {{ __('????ng nh???p') }}
                                                </x-jet-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ show: false }" @click.away="show = false" class="ml-4">
                                <button @click="show = ! show" type="button"
                                        class="flex bg-yellow-300 text-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:border-white text-sm">
                                    <span class="pr-2">????ng K??</span>
                                    <svg class="fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg"
                                         height="24"
                                         viewBox="0 0 24 24" width="24">
                                        <path d="M7 10l5 5 5-5z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                </button>
                                <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
                                    <div class="p-6">
                                        <x-jet-validation-errors class="mb-4"/>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div>
                                                <x-jet-label for="name" value="{{ __('T??n') }}"/>
                                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                             :value="old('name')" required autofocus
                                                             autocomplete="name"/>
                                            </div>

                                            <div class="mt-4">
                                                <x-jet-label for="email" value="{{ __('Email') }}"/>
                                                <x-jet-input id="email" class="block mt-1 w-full" type="email"
                                                             name="email"
                                                             :value="old('email')" required/>
                                            </div>
                                            <div class="mt-4">
                                                <x-jet-label for="phone_number" value="{{ __('S??? ??i???n tho???i') }}"/>
                                                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text"
                                                             name="phone_number" :value="old('phone_number')" required/>
                                            </div>

                                            <div class="mt-4">
                                                <x-jet-label for="password" value="{{ __('M???t kh???u') }}"/>
                                                <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                                             name="password" required autocomplete="new-password"/>
                                            </div>

                                            <div class="mt-4">
                                                <x-jet-label for="password_confirmation"
                                                             value="{{ __('X??c nh???n l???i m???t kh???u') }}"/>
                                                <x-jet-input id="password_confirmation" class="block mt-1 w-full"
                                                             type="password" name="password_confirmation" required
                                                             autocomplete="new-password"/>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                   href="{{ route('login') }}">
                                                    {{ __('???? ??o t??i kho???n?') }}
                                                </a>

                                                <x-jet-button class="ml-4">
                                                    {{ __('????ng k??') }}
                                                </x-jet-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endauth
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
</nav>

{{-- @yield('content') --}}
<div class="container p-20 mx-auto">

    {{ $slot  }}

</div>
<footer class="text-white text-1xl bg-black shadow-md my-2">
    <footer class="bg-gray-900">

        <div class="container max-w-6xl mx-auto items-center px-2 py-8 divide-y divide-light-blue-400">
            <div class="flex py-4 -py-2">
                <div class="text-white w-1/3">
                    <p class="text-2xl font-bold">
                        Salon hair
                    </p>
                    <p>{{ $setting->address }}</p>
                    <p class="w-12 flex">
                        <img src="https://30shine.com/static/media/visa.689e1cc5.svg">
                        <img src="https://30shine.com/static/media/mastercard.7d32e23f.svg">
                    </p>
                </div>
                <div class="text-white px-12 w-1/3">
                    <p class="text-2xl font-bold">
                        Gi??? ph???c v???
                    </p>
                    <span>
                        Gi??? ph???c v???: T2 - T6 (8h30 - 20h30)
                        <br>T7, CN (7h30 - 23h30)
                    </span>
                    <p class="my-2">
                        HOTLINE G??P ?? CH???T L?????NG D???CH V???
                    </p>
                    <p class="px-4 py-2 bg-yellow-500 text-xl font-bold rounded-md text-center">{{ $setting->phone_number }}</p>
                </div>
            </div>
            <div class="w-full mx-auto flex flex-wrap items-center">
                <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                    <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                        <span class="text-base text-gray-200">Salon</span>
                    </a>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                    <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                        <li>
                            <a class="inline-block py-2 px-3 text-white no-underline"
                               href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                               href="{{ route('service') }}">D???ch v???</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                               href="{{ route('shop') }}">Store</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                               href="{{ route('contact') }}">Li??n h???</a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </footer>

</footer>

<script src="{{ 'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js' }}"></script>
<script src="{{ 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js' }}" defer></script>

@livewireScripts

</body>

</html>
