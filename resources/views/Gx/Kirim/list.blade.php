
@extends('layouts.table')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Kirim Contacts</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Kirim</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">

                </div>
            </div>
            <div class="content-body">
                <div class="row mb-1 mt-1 mt-md-0">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary" id="kirim_sync"><i class="fa fa-sync"></i> Sync Kirim</a> Last-updated at : 12-04-2022
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- datatable started -->
                        <div id="app-invoice-wrapper" class="">
                            <table id="app-invoice-table" class="table" style="width: 100%;">
                                <thead class="border-bottom border-dark">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <span class="align-middle">Invoice#</span>
                                        </th>
                                        <th>Kirim Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Deleted at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->id}}</td>
                                        <td><span class="invoice-amount">{{$contact->name}}</span></td>
                                        <td><span class="invoice-date">{{$contact->email}}</span></td>
                                        <td><span class="invoice-customer">@if($contact->status=='false')<span class="badge badge-danger badge-pill">Delete</span>@elseif($contact->status=='true') <span class="badge badge-danger badge-pill">Delete</span> @else <span class="badge badge-warning badge-pill">Not Exists in HS</span> @endif</span></td>
                                        <td>{{$contact->updated_at}}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <style>
    input.check{
        display: none;
    }


    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

                $('#kirim_sync').on('click',function(){

                    $.ajax({
                            url: {{route('gx.getKirimContacts')}},
                            type: 'GET',
                            data: {
                                'id':12
                            },
                            beforeSend: function() {
                            },
                            complete: function() {
                            },
                            success: function(data) {
                                console.log(data);
                            },
                            error: function(e) {
                                console.log(e.message);
                            }
                    });

                });

        });
    </script>
    @endsection
