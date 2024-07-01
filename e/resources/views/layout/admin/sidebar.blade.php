<aside class="main-sidebar
 {{ settings('theme_sidebar-no-expand', 1) ? 'sidebar-no-expand' :''}}
 {{ settings('theme_dark_sidebar_variant', 1)}}
sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link
    {{ settings('theme_brand_link', 1)}}
    ">
      <img src="{{ settings('app_image', 9) }}" alt="{{ settings('app_name_short', 9) }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ settings('app_name_short', 9) }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

@php
        $active_menu = 'active progress-bar progress-bar-striped align-items-center flex-start  flex-row justify-content-start';
@endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline p-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column
        {{ settings('nav-flat', 1) ? 'nav-flat' :''}}
        {{ settings('theme_nav-legacy', 1) ? 'nav-legacy' :''}}
        {{ settings('theme_nav-compact', 1) ? 'nav-compact' :''}}
        {{ settings('theme_nav-child-indent', 1) ? 'nav-child-indent' :''}}
        {{ settings('theme_nav-collapse-hide-child', 1) ? 'nav-collapse-hide-child' :''}}

        " data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link
                {{ Request::routeIs('admin.dashboard') ||
                Request::routeIs('admin.home') ||
                Request::routeIs('admin') ? $active_menu : ''
                }}
            ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Role Permission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="{{ route('admin.permission.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item
                {{
                    Request::routeIs('admin.setting.index') ||
                    Request::routeIs('admin.setting.index_group')

                ? 'menu-is-opening menu-open' : ''
                }}
          ">
            <a href="#" class="nav-link
               {{ Request::routeIs('admin.setting.index') ||
                    Request::routeIs('admin.setting.index_group')
               ? 'active' : ''
                }}
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                {{  settings('settings', 10) }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('admin.setting.index', ['main-setting', '9']) }}" class="nav-link
                  {{ Request::is('admin/settings/main-setting/9')  ? $active_menu : ''  }}
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ settings('main_setting', 10) }}</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('admin.setting.index', ['setting-status', '8']) }}" class="nav-link
                  {{ Request::is('admin/settings/setting-status/8')  ? $active_menu : ''  }}
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ settings('setting_status', 10) }}</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('admin.setting.index', ['site-title','10']) }}" class="nav-link
                    {{ Request::is('admin/settings/site-title/10') ? $active_menu : '' }}
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ settings('site_title_setting', 10) }}</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('admin.setting.index_group', ['payment-setting','20']) }}" class="nav-link
                    {{ Request::is('admin/settings/payment-setting/20/group') ? $active_menu : '' }}
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ settings('payment_setting', 10) }}</p>
                </a>
              </li>
            </ul>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
