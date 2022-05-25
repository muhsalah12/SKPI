<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                @if(session('auth_user')['foto'] == '')
                    <img src="{{ asset('/template') }}/images/user.png" width="48" height="48" alt="User" />
                @else
                    <img src="{{ asset(session('auth_user')['foto']) }}" width="48" height="48" alt="User" />
                @endif
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, {{ session('auth_user')['nama'] }}</div>
                {{--<div class="email">{{ session('auth_user')['email'] }}</div>--}}
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        {{-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> 
                        <li role="separator" class="divider"></li> --}}
                        <li><a href="{{ URL::to('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ URL::to('/dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/user') }}">
                        <i class="material-icons">assessment</i>
                        <span>Admin</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/jenis-swab') }}">
                        <i class="material-icons">analytics</i>
                        <span>Jenis Swab</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/jenis-penyedia') }}">
                        <i class="material-icons">inventory_2</i>
                        <span>Jenis Penyedia</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/kecamatan') }}">
                        <i class="material-icons">list_alt</i>
                        <span>Data Kecamatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/penyedia-swab') }}">
                        <i class="material-icons">local_hospital</i>
                        <span>Penyedia Swab</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="javascript:void(0);">Penyedia Swab Test Covid-19</a>
            </div>
            {{-- <div class="version">
                <b>Version: </b> 1.0.5
            </div> --}}
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>