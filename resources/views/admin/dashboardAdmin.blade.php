@extends('layouts.herit_dashboard_respo')
@section('title', 'Dashboard')


@section('dashbordAdmin')

    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <div>
                <div class="img" style="display:flex;justify-content:space-betwen;">
                    <h1 class="breadcrumb-item active">Dashboard</h1>
                </div>
        </ol>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4"
                    style="background: linear-gradient(to left, #66ffff 0%, #3399ff 100%);">
                    <div class="card-body">Responsable</div>
                    <div class="card-body" style="font-size:25px;padding-top:0">{{$comptRespo}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('ad_respo') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4"
                    style="background: linear-gradient(to right, #009933 0%, #00ffcc 100%);">
                    <div class="card-body">Service</div>
                    <div class="card-body" style="font-size:25px;padding-top:0">{{$comptServ}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('ad_service') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4"
                    style="background: linear-gradient(to right, #ff9933 0%, #ffcccc 100%);">
                    <div class="card-body">Ville</div>
                    <div class="card-body" style="font-size:25px;padding-top:0">{{$comptVille}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('ad_ville') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4"
                    style="background: linear-gradient(to right, #33ccff 0%, #afdee8 100%);">
                    <div class="card-body">Complaint_responsable</div>
                    <div class="card-body" style="font-size:25px;padding-top:0">{{$comptCompl}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('complainRespo') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
