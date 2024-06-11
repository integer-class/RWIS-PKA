<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"></a>
                <a href="{{url('data_warga')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-clipboard"></i> Data Warga</a>
                <a href="{{url('data_keluarga')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-clipboard"></i> Data Keluarga</a>
                <a href="{{url('data_keuangan')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-money"></i> Keuangan</a>
                <a href="{{url('data_kegiatan')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-th-list"></i> Kegiatan</a>
                <a href="{{url('data_umkm')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-folder"></i> UMKM</a>
                <a href="{{url('data_bansos')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-address-book"></i> Bansos</a>
                <a href="{{url('templatesurat')}}" class="btn btn-toggle-offcanvas"><i class="fa fa-tasks"></i> Template Surat</a>
            </div>
        </div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                    <li><a href="{{url('logout')}}" class="icon-menu"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>