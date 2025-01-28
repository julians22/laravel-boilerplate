{{-- <nav class="navbar navbar-expand-md">
    <div class="container mx-auto relative flex justify-between items-center gap-x-4">
        <x-utils.link
            :href="route('frontend.index')"
            :text="appName()"
            class="navbar-brand" />

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapseable navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <x-utils.link
                            :text="__(getLocaleName(app()->getLocale()))"
                            class="nav-link dropdown-toggle"
                            id="navbarDropdownLanguageLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false" />

                        @include('includes.partials.lang')
                    </li>
                @endif

                @guest
                    <li class="nav-item">
                        <x-frontend.basic.link
                            :href="route('frontend.auth.login')"
                            :text="__('Login')"
                            class="nav-link" />
                    </li>

                    @if (config('boilerplate.access.user.registration'))
                        <li class="nav-item">
                            <x-utils.link
                                :href="route('frontend.auth.register')"
                                :active="activeClass(Route::is('frontend.auth.register'))"
                                :text="__('Register')"
                                class="nav-link" />

                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <x-utils.link
                            href="#"
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            <x-slot name="text">
                                <img class="rounded-circle" style="max-height: 20px" src="{{ $logged_in_user->avatar }}" />
                                {{ $logged_in_user->name }} <span class="caret"></span>
                            </x-slot>
                        </x-utils.link>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if ($logged_in_user->isAdmin())
                                <x-utils.link
                                    :href="route('admin.dashboard')"
                                    :text="__('Administration')"
                                    class="dropdown-item" />
                            @endif

                            @if ($logged_in_user->isUser())
                                <x-utils.link
                                    :href="route('frontend.user.dashboard')"
                                    :active="activeClass(Route::is('frontend.user.dashboard'))"
                                    :text="__('Dashboard')"
                                    class="dropdown-item"/>
                            @endif

                            <x-utils.link
                                :href="route('frontend.user.account')"
                                :active="activeClass(Route::is('frontend.user.account'))"
                                :text="__('My Account')"
                                class="dropdown-item" />

                            <x-utils.link
                                :text="__('Logout')"
                                class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <x-slot name="text">
                                    @lang('Logout')
                                    <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                                </x-slot>
                            </x-utils.link>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>

@if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
@endif --}}

<x-frontend.basic.navigation>

    <x-slot:brandLogo>
        <svg width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="w-12 h-12 bg-emerald-500">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M88.1121 88.1134L150.026 150.027L150.027 150.027L150.027 150.027L150.028 150.027L150.027 150.026L88.1133 88.1122L88.1121 88.1134ZM273.878 273.877C272.038 274.974 196.128 319.957 165.52 289.349L88.1124 211.942L26.1434 273.911C26.1434 273.911 -20.3337 196.504 10.651 165.519L88.1121 88.1134L26.1417 26.1433C26.1417 26.1433 69.6778 0.00338007 104.519 0H0V300H300V0H104.533C116.144 0.00112664 126.789 2.90631 134.534 10.651L211.941 88.1123L273.877 26.177C274.974 28.0159 319.957 103.926 289.349 134.535L211.942 211.942L273.878 273.877ZM273.878 273.877L273.912 273.857V273.911L273.878 273.877ZM273.877 26.177L273.911 26.1429H273.857C273.857 26.1429 273.863 26.1544 273.877 26.177Z"
                fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 0H300V300H0V0ZM150.026 150.025C121.715 99.731 88.1131 88.1122 88.1131 88.1122L10.6508 165.519C10.6508 165.519 26.143 150.027 150.026 150.027H150.027C150.026 150.027 150.026 150.027 150.026 150.027L150.026 150.027C99.731 178.339 88.1124 211.941 88.1124 211.941L165.52 289.348C165.52 289.348 150.032 273.86 150.027 150.027H150.029C178.341 200.323 211.944 211.942 211.944 211.942L289.352 134.535C289.352 134.535 273.864 150.023 150.027 150.027V150.027L150.027 150.027C200.322 121.715 211.941 88.1125 211.941 88.1125L134.534 10.651C134.534 10.651 150.026 26.1431 150.026 150.025ZM150.027 150.027L150.026 150.027C150.026 150.026 150.026 150.026 150.026 150.025C150.026 150.025 150.027 150.026 150.027 150.027ZM150.027 150.027L150.027 150.026L150.027 150.027C150.027 150.027 150.027 150.027 150.027 150.027L150.027 150.027ZM150.027 150.027C150.027 150.027 150.027 150.027 150.027 150.027H150.027L150.027 150.027Z"
                fill="rgba(255,255,255,.2)" />
        </svg>
    </x-slot:brandLogo>


    <x-slot:menuItems>
        @guest
            <li role="none" class="flex items-stretch">
                <x-frontend.basic.link
                    :href="route('frontend.auth.login')"
                    :text="__('Login')"/>
            </li>
            @if (config('boilerplate.access.user.registration'))

                <li role="none" class="flex items-stretch">
                    <x-frontend.basic.link
                        :href="route('frontend.auth.register')"
                        :text="__('Register')"/>
                </li>
            @endif

        @else
            <li role="none" class="flex items-stretch relative">
                <x-frontend.basic.dropdown
                    label="{{ $logged_in_user->name }}"
                    size="md"
                    >
                    <x-slot:items>
                        @if ($logged_in_user->isAdmin())
                            <li>
                                <a class="dropdown-item"
                                    href="{{route('admin.dashboard')}}">
                                    <span class="flex flex-col gap-1 overflow-hidden whitespace-nowrap">
                                    <span class="leading-5 truncate">@lang('Administration')</span>
                                    </span>
                                </a>
                            </li>
                        @endif

                        @if ($logged_in_user->isUser())
                            <li>
                                <a class="dropdown-item"
                                    href="{{route('frontend.user.dashboard')}}">
                                    <span class="flex flex-col gap-1 overflow-hidden whitespace-nowrap">
                                    <span class="leading-5 truncate">@lang('Dashboard')</span>
                                    </span>
                                </a>
                            </li>
                        @endif

                        <li>
                            <a class="dropdown-item"
                                href="{{route('frontend.user.account')}}">
                                <span class="flex flex-col gap-1 overflow-hidden whitespace-nowrap">
                                  <span class="leading-5 truncate">@lang('My Account')</span>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{route('frontend.auth.logout')}}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="flex flex-col gap-1 overflow-hidden whitespace-nowrap">
                                    <span class="leading-5 truncate">@lang('Logout')</span>
                                    <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                                </span>
                            </a>
                        </li>
                    </x-slot:items>

                </x-frontend.basic.dropdown>
            </li>

        @endguest
    </x-slot:menuItems>

</x-frontend.basic.navigation>
