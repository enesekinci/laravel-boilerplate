 <nav class="pc-sidebar">
     <div class="navbar-wrapper">
         <div class="m-header">
             <a href="#" class="b-brand text-primary">
                 <!-- ========   Change your logo from here   ============ -->
                 <img src="{{ dashboard_logo() }}" />
                 <span class="badge bg-light-success rounded-pill ms-2 theme-version"></span>
             </a>
         </div>
         <div class="navbar-content">
             <div class="card pc-user-card">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="flex-shrink-0">
                             <img src="/theme/dashboard/assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                         </div>
                         <div class="flex-grow-1 ms-3 me-2">
                             <h6 class="mb-0">{{ auth()->user()->name ?? null }}</h6>
                             <small>{{ auth()->user()->role->name ?? null }}</small>
                         </div>
                         <a class="btn btn-icon btn-link-secondary avtar-s" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                             <svg class="pc-icon">
                                 <use xlink:href="#custom-sort-outline"></use>
                             </svg>
                         </a>
                     </div>
                     <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                         <div class="pt-3">
                             <a href="{{ route('dashboard.profile') }}">
                                 <i class="ti ti-user"></i>
                                 <span>Hesabım</span>
                             </a>
                             <a href="{{ route('settings.index') }}">
                                 <i class="ti ti-settings"></i>
                                 <span>Ayarlar</span>
                             </a>
                             <a href="{{ route('logout') }}">
                                 <i class="ti ti-power"></i>
                                 <span>Çıkış</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>

             <ul class="pc-navbar">
                 <x-dashboard.menu-link :url="route('dashboard')" title="Panel" icon="airplay" />

                 <x-dashboard.menu-link :url="route('posts.index')" title="Post" icon="file" />

                 <x-dashboard.menu-dropdown-link title="Ayarlar" icon="settings">

                     <x-dashboard.menu-dropdown-item :url="route('settings.index')" title="Genel Ayarlar" />

                 </x-dashboard.menu-dropdown-link>

             </ul>
         </div>
     </div>
 </nav>
