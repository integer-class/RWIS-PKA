@extends('layouts_rt.app');
@section('content')

<div class="container-fluid">
    <!-- Page header section  -->
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h1>Hi, Welcomeback!</h1>
                <span>JustDo Dashboard,</span>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                        <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">289</h5>
                    </div>
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                        <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">$541</h5>
                    </div>
                    <div class="mb-3 mb-xl-0">
                        <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">$98M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
                <a class="navbar-brand" href="#">M.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-muted"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link" href="index.html">Analytics</a></li>
                        <li class="nav-item vivify swoopInTop delay-250"><a class="nav-link" href="index2.html">Cryptocurrency</a></li>
                        <li class="nav-item vivify swoopInTop delay-350"><a class="nav-link" href="index3.html">Campaign</a></li>
                        <li class="nav-item dropdown vivify swoopInTop delay-450">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">More</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index4.html">eCommerce Analytics</a>
                                <a class="dropdown-item" href="index5.html">Sales Monitoring</a>
                                <a class="dropdown-item" href="index6.html">Finance Performance</a>
                            </div>
                        </li>
                    </ul>
                    <div class="ml-auto">
                        <a href="app-todo.html" class="btn btn-default">ToDo</a>
                        <a href="setting.html" class="btn btn-default">Settings</a>
                        <a href="javascript:void(0);" target="_blank" class="btn btn-dark">Buy this item</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-12">
            <div class="card theme-bg gradient">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider1" class="carousel vert slide" data-ride="carousel" data-interval="2700">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Total Income</div>
                                                <div class="mt-3 h1">$13,025</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">3.78% <i class="fa fa-caret-down"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Total Revenue</div>
                                                <div class="mt-3 h1">$9,452</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.85% <i class="fa fa-caret-up"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Total Expense</div>
                                                <div class="mt-3 h1">$4,124</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">2.04% <i class="fa fa-caret-down"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2800">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Total User</div>
                                                <div class="mt-3 h1">1,258</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">7% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Sessions</div>
                                                <div class="mt-3 h1">451</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">23.5% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Bounce Rate</div>
                                                <div class="mt-3 h1">36.80</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">5% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Bitcoin Wallet</div>
                                                <div class="mt-3 h1">4.25762</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">5.23% <i class="fa fa-caret-up"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Ethereum Wallet</div>
                                                <div class="mt-3 h1">3.15948</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">1.85% <i class="fa fa-caret-up"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>NioWallet</div>
                                                <div class="mt-3 h1">2.75342</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">1.25% <i class="fa fa-caret-down"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider4" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Number of Meetings</div>
                                                <div class="mt-3 h1">781</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                    <span>(30 days)</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Number of Clients</div>
                                                <div class="mt-3 h1">10K</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                    <span>(30 days)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-12">
            <div class="section_title">
                <div class="mr-3">
                    <h3>Overview</h3>
                    <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                </div>
                <div>
                    <div class="btn-group mb-3">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">14 March 2020</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                        <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix row-deck">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>My Portfolio</h2>
                    <small class="font-12">The total number of Page Impressions within the date range</small>
                </div>
                <div class="body">
                    <table class="table table-striped mb-0">
                        <tbody>
                            <tr>
                                <td>Apple</td>
                                <td class="text-right">984.52</td>
                                <td class="text-right"><span class="text-success">(0.25%) <i class="fa fa-caret-up"></i></span></td>
                            </tr>
                            <tr>
                                <td>Google</td>
                                <td class="text-right">956.3</td>
                                <td class="text-right"><span class="text-danger">(-0.15%) <i class="fa fa-caret-down"></i></span></td>
                            </tr>
                            <tr>
                                <td>DMKT</td>
                                <td class="text-right">89.74</td>
                                <td class="text-right"><span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span></td>
                            </tr>
                            <tr>
                                <td>Lenovo</td>
                                <td class="text-right">89.74</td>
                                <td class="text-right"><span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span></td>
                            </tr>
                            <tr>
                                <td>TMLS</td>
                                <td class="text-right">210.04</td>
                                <td class="text-right"><span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span></td>
                            </tr>
                            <tr>
                                <td>Dell</td>
                                <td class="text-right">210.04</td>
                                <td class="text-right"><span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span></td>
                            </tr>
                            <tr>
                                <td>YOUS</td>
                                <td class="text-right">218.47</td>
                                <td class="text-right"><span class="text-danger">(-0.42%) <i class="fa fa-caret-down"></i></span></td>
                            </tr>
                            <tr>
                                <td>TCS</td>
                                <td class="text-right">48.75</td>
                                <td class="text-right"><span class="text-danger">(-0.63%) <i class="fa fa-caret-down"></i></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Campaign By Channel</h2>
                    <small class="font-12">The total number of Page Impressions within the date range</small>
                </div>
                <div class="body">
                    <div id="chart-donut-d" style="height: 220px"></div>
                    <div class="mt-2">
                        <div class="form-group">
                            <label class="d-block">Organic Search <span class="float-right">2,098</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%; background-color: #2c83b6;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Email Campaign <span class="float-right">1,002</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: #a5d8a2;"></div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="d-block">Referral Links <span class="float-right">780</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%; background-color: #9367b4;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Page Impressions</h2>
                    <small class="font-12">The total number of Page Impressions within the date range</small>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg gradient">
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="d-flex flex-row">
                        <div class="pb-3">
                            <h5 class="mb-0">$356</h5>
                            <small class="text-muted font-11">Paid</small>
                        </div>
                        <div class="pb-3 pl-4 pr-4">
                            <h5 class="mb-0">$198</h5>
                            <small class="text-muted font-11">Viral</small>
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-default">D</button>
                                <button type="button" class="btn btn-sm btn-primary theme-bg gradient">W</button>
                                <button type="button" class="btn btn-sm btn-default">M</button>
                            </div>
                        </div>
                    </div>
                    <div id="chart-bar-stacked" style="height: 320px"></div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection


