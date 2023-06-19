@extends('layouts.herit_dashboard_respo')
@section('title','responsable')

@section('updateServ')
<div class="container mt-5">
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-denger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <form action="{{ route('ModifyServ', [$serv->id_serv]) }}" method="POST">
        @csrf
        <div>
            <label for="">nom service</label>
            <input type="text" value="{{ $serv->nom_serv }}" name="nom_serv">
        </div>
        <br><br>
        <div class="" style="display: flex">
            <input type="submit" style="width:100px;margin-right:10px">
            <a href="{{ route('ad_respo') }}"><button type="button" class="btn btn-primary" style="padding: 17px">Annuler</button></a>
        </div>
    </form>
</div>
@endsection
