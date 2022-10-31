<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">

                @php $settings = app(app\Settings\CustomizationSettings::class); @endphp

                @if (file_exists(storage_path("app/public/images/".$settings->custom_icon_filename)) && $settings->custom_icon_filename != null)
                    <img src="{{asset("storage/images/".$settings->custom_icon_filename)}}" height="50" width="50" alt="Logo">
                @endif
            </span>
            <span class="mt-1 ms-1 sidebar-text">
                {{ config('app.name', 'Laravel') }}
            </span>
        </a>
    </li>

    {!! $navigationManager->render(\App\Enums\NavigationLocation::sidebar) !!}


{{--    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">--}}
{{--        <a href="{{ route('about') }}" class="nav-link">--}}
{{--            <span class="sidebar-icon">--}}
{{--                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                    xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>--}}
{{--                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>--}}
{{--                </svg>--}}
{{--            </span>--}}
{{--            <span class="sidebar-text">{{ __('About us') }}</span>--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-item">--}}
{{--        <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"--}}
{{--            data-bs-target="#submenu-app">--}}
{{--            <span>--}}
{{--                <span class="sidebar-icon me-3">--}}
{{--                    <i class="fas fa-users"></i>--}}
{{--                </span>--}}
{{--                <span class="sidebar-text">User Management</span>--}}
{{--            </span>--}}
{{--            <span class="link-arrow">--}}
{{--                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
{{--                        clip-rule="evenodd">--}}
{{--                    </path>--}}
{{--                </svg>--}}
{{--            </span>--}}
{{--        </span>--}}
{{--        <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">--}}
{{--            <ul class="flex-column nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <span class="sidebar-icon">--}}
{{--                          <i class="fas fa-users"></i>--}}
{{--                        </span>--}}
{{--                        <span class="sidebar-text">Users</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <span class="sidebar-icon">--}}
{{--                           <i class="fas fa-folder-open"></i>--}}
{{--                        </span>--}}
{{--                        <span class="sidebar-text">Roles</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </li>--}}
</ul>
