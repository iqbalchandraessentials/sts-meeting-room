<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            {{-- <li class="header nav-small-cap">HOME</li>
            <li class="pt-3 {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li> --}}
            <li class="header nav-small-cap">Requisition</li>
            <li class="treeview {{ Request::segment(1) === 'requisition' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-blackboard"></i>
                    <span>Employee Requisition</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(1) === 'requisition' && Request::segment(2) === 'create' ? 'active' : '' }}">
                        <a href="{{ route('requisition.create') }}"><i class="ti-more"></i>Add New</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'requisition' && Request::segment(2) === null || Request::segment(2) === '' ? 'active' : '' }}">
                        <a href="{{ route('requisition.index') }}">
                            <i class="ti-more"></i>List Employee Requisition
                        </a>
                        {{-- <a href="{{ url('meeting-room') }}">
                            <i class="ti-more"></i>List Meeting Room
                        </a> --}}
                    </li>
                </ul>
            </li>
            <li class="treeview {{ Request::segment(1) === 'facilities' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-panel"></i>
                    <span>Facilities</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="{{ Request::segment(1) === 'facilities' && Request::segment(2) === 'add-new' ? 'active' : '' }}">
                        <a href="{{ url('/facilities/add-new') }}">
                            <i class="ti-more"></i>Add New
                        </a>
                    </li> --}}
                    <li class="{{ Request::segment(1) === 'facilities' && Request::segment(2) === null || Request::segment(2) === 'add-new' ? 'active' : '' }}">
                        <a href="{{ url('/facilities') }}">
                            <i class="ti-more"></i>List Facilities
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'facilities' && Request::segment(2) === 'categories' ? 'active' : '' }}">
                        <a href="{{ url('/facilities/categories') }}">
                            <i class="ti-more"></i>Categories
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header nav-small-cap">FOOD & BEVERAGE</li>
            <li class="{{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === null ? 'active' : '' }}">
                <a href="{{ url('foodandbaverages') }}">
                    <i class="ti-dashboard"></i>
                    <span>F&B Dashboard</span>
                </a>
            </li>
            <li class="treeview {{ Request::segment(1) === 'foodandbaverages' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-menu-alt"></i>
                    <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === 'menu' ? 'active' : '' }}">
                        <a href="{{ url('/foodandbaverages/menu') }}">
                            <i class="ti-more"></i>List Menu
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === 'categories' ? 'active' : '' }}">
                        <a href="{{ url('foodandbaverages/categories') }}">
                            <i class="ti-more"></i>Categories
                        </a>
                    </li>
                </ul>
            </li>

            <li class="header nav-small-cap">ACTIVITY</li>
            <li class="{{ Request::segment(1) === 'book-now' ? 'active' : '' }}">
                <a href="{{ url('book-now') }}">
                    <i class="ti-pencil-alt"></i>
                    <span>Book Now</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) === 'my-booking' ? 'active' : '' }}">
                <a href="{{ url('my-booking') }}">
                    <i class="ti-calendar"></i>
                    <span>My Booking</span>
                </a>
            </li>
            {{-- <li class="{{ Request::segment(1) === 'my-meeting-history' ? 'active' : '' }}">
                <a href="{{ url('my-meeting-history') }}">
                    <i class="ti-agenda"></i>
                    <span>My Meeting History</span>
                </a>
            </li> --}}

            <li class="header nav-small-cap">REPORT</li>
            <li class="{{ Request::segment(1) === 'report' ? 'active' : '' }}">
                <a href="{{ url('report') }}">
                    <i class="ti-briefcase"></i>
                    <span>Report</span>
                </a>
            </li>
            <li class="header nav-small-cap">UTILITIES</li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active' : '' }}">
                <a href="{{ url('my-profile') }}">
                    <i class="ti-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) === 'user' ? 'active' : '' }}">
                <a href="{{ url('user') }}">
                    <i class="ti-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
