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
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="fa fa-comments-o"></i></a></li>
                    <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                    <li><a href="{{url('logout')}}" class="icon-menu"><i class="fa fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


{{-- <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
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
                <li><a href="{{url('data_bansos')}}"><i class="fa fa-address-book"></i> <span>Bansos</span></a></li>                    
                <li><a href="{{url('templatesurat')}}"><i class="fa fa-tasks"></i> <span>Template Surat</span></a></li>
             --}}