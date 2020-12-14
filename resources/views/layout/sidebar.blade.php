<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src="{{ asset('assets/images/users/1.jpg')}}" alt="users"
                                class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                @if(auth()->check() && auth()->user()->is_admin == 1 )
                                <h5 class="m-b-0 user-name font-medium">{{Auth::user()->name}}</h5>
                                <span class="op-5 user-email">{{Auth::user()->email}}</span>
                                @elseif(auth()->check() && auth()->user()->is_admin == 0 )
                                <h5 class="m-b-0 user-name font-medium">{{Auth::user()->name}}</h5>
                                <span class="op-5 user-email">{{Auth::user()->email}}</span>
                                @else
                                <h5 class="m-b-0 user-name font-medium">Admin</h5>
                                <span class="op-5 user-email">Admin@demo.com</span>
                                @endif
                            </a>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                @if(auth()->check() && auth()->user()->is_admin == 1)
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                @elseif(auth()->check() && auth()->user()->is_admin == 0)
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('admin.user.create')}}" aria-expanded="false"><i
                            class="mdi mdi-apps"></i><span class="hide-menu">Create User </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('admin.product.create')}}" aria-expanded="false"><i
                            class="mdi mdi-account-network"></i><span class="hide-menu">Product</span></a></li>

                @else
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('login') }}" aria-expanded="false"><i class="mdi mdi-login-variant"></i><span
                            class="hide-menu">Login</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('register') }}" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                            class="hide-menu">Register</span></a></li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->