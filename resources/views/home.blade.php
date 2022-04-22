@extends('layouts.dashboard')

@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-primary bg-darken-2">
                                    <i class="icon-credit-card font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-primary white media-body">
                                    <h5>Invoices</h5>
                                    <h5 class="text-bold-400 mb-0"> 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-danger bg-darken-2">
                                    <i class="icon-user font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-danger white media-body">
                                    <h5>Users</h5>
                                    <h5 class="text-bold-400 mb-0"> 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-warning bg-darken-2">
                                    <i class="icon-check font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-warning white media-body">
                                    <h5>Transactions</h5>
                                    <h5 class="text-bold-400 mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-success bg-darken-2">
                                    <i class="icon-wallet font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-success white media-body">
                                    <h5>Total Payments</h5>
                                    <h5 class="text-bold-400 mb-0">$ 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Stats -->
            <!--Product sale & buyers -->
            <div class="row match-height">






            </div>
            <!--/ Product sale & buyers -->




        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
