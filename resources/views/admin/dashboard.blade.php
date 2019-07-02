@extends('layouts.adminMaster')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard - {{\Illuminate\Support\Facades\Auth::user()->utd->nama}}</h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Total Donor (UTD)</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>{{$utd}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-hospital fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Total Donor (Mobile)</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>0</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-car-alt fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Ongoing Event</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>{{$ongoing}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-danger py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Completed Event</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>{{$finish}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-check fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    @include('inc.alert')
    {{--@include('admin.new')--}}
    {{--@include('admin.past')--}}
</div>
@endsection