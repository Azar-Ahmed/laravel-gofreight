<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <a href="/"><img src="{{asset('admin_assets/images/site_logo.png')}}" style="width: 100%" class="logo-icon" alt="logo icon"></a>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      
        <li class="{{ request()->is('admin/dashboard') ? 'mm-active' : '' }}">
            <a href="{{url('admin/dashboard')}}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/users') ? 'mm-active' : '' }}">
            <a href="{{url('admin/users')}}">
                <div class="parent-icon"><i class="fa-solid fa-user  fa-sm"></i>
                </div>
                <div class="menu-title">Customer</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/quotation') ? 'mm-active' : '' }}">
            <a href="{{url('admin/quotation')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-file-waveform  fa-sm"></i>
                </div>
                <div class="menu-title">Quotation</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/ewb-bill') ? 'mm-active' : '' }}">
            <a href="{{url('admin/ewb-bill')}}">
                <div class="parent-icon"><i class="fa-solid fa-feather fa-sm"></i>
                </div>
                <div class="menu-title">Ewb Bill</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/invoice') ? 'mm-active' : '' }}">
            <a href="{{url('admin/invoice')}}">
                <div class="parent-icon"><i class="fa-solid fa-receipt fa-sm"></i>
                </div>
                <div class="menu-title">Invoice</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/vendor') ? 'mm-active' : '' }}">
            <a href="{{url('admin/vendor')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-money-bill fa-sm"></i>
                </div>
                <div class="menu-title">Vendor Payment</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/vendor-source') ? 'mm-active' : '' }}">
            <a href="{{url('admin/vendor-source')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-money-bill fa-sm"></i>
                </div>
                <div class="menu-title">Vendor Source</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/profit-loss') ? 'mm-active' : '' }}">
            <a href="{{url('admin/profit-loss')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-chart-simple fa-sm"></i>
                    {{-- <i class="bx bx-user-circle fa-sm"></i> --}}
                </div>
                <div class="menu-title">Profit & Loss</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/report') ? 'mm-active' : '' }}">
            <a href="{{url('admin/report')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-file fa-sm"></i>
                </div>
                <div class="menu-title">Client Report</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/airport') ? 'mm-active' : '' }}">
            <a href="{{url('admin/airport')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-plane-departure fa-sm"></i>
                    {{-- <i class="bx bx-user-circle fa-sm"></i> --}}
                </div>
                <div class="menu-title">Airport</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/drive') ? 'mm-active' : '' }}">
            <a href="{{url('admin/drive')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-truck fa-sm"></i>
                </div>
                <div class="menu-title">Dive Together</div>
            </a>
        </li>
        <li class="{{ request()->is('admin/charges') ? 'mm-active' : '' }}">
            <a href="{{url('admin/charges')}}">
                <div class="parent-icon">
                    <i class="fa-solid fa-people-roof fa-sm"></i>
                    {{-- <i class="bx bx-user-circle fa-sm"></i> --}}
                </div>
                <div class="menu-title">Rate Manager</div>
            </a>
        </li>
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application</div>
            </a>
            <ul>
                <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a></li>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a></li>
                
            </ul>
        </li> --}}
        
    </ul>
    <!--end navigation-->
</div>
