<div id="left-sidebar" class="sidebar">
    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href="index.html"><img src="assets/images/RTRWLOGO.png" alt="Mooli Logo" class="img-fluid logo"><span>RTWebConnect</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>RW </span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Virza Schumacher</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="fa fa-user"></i>Profil Saya</a></li>
                    <li><a href="page-login.html"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">

                <li><a href="app-inbox.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-clipboard"></i><span>Data Warga</span></a>
                    <ul>
                        <li><a href="{{ url('data_warga') }}">Data Warga</a></li>
                        <li><a href="{{ url('data_keluarga') }}">Data Keluarga</a></li>
                    </ul>
                </li>
               
                <li><a href="{{url('data_keuangan')}}"><i class="fa fa-money"></i> <span>Keuangan</span></a></li>
               
                <li><a href="{{url('data_kegiatan')}}"><i class="fa fa-th-list"></i> <span>Kegiatan</span></a></li>
                <li><a href="{{url('data_umkm')}}"><i class="fa fa-folder"></i> <span>UMKM</span></a></li>
                <li><a href="app-contacts.html"><i class="fa fa-address-book"></i> <span>Bansos</span></a></li>                    
                <li><a href="app-scrumboard.html"><i class="fa fa-tasks"></i> <span>Template Surat</span></a></li>
            </ul>
        </nav>     
    </div>
</div>

