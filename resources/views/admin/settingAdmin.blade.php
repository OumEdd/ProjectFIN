@extends('layouts.herit_dashboard_respo')
@section('title','setting')

@section('settingAdmin')

<div class="container">
    @if (Session::has('succes'))
        <div class="alert alert-success">{{session::get('succes')}}</div>
    @endif
    <form action="{{route('updateSettingAdmin')}}" method="POST">
        @csrf
        <label for="">NOM</label>
        <input type="text" name="nom_admin" value="{{$data->nom_admin}}">
        <label for="">PRENOM</label>
        <input type="text" name="prenom_admin" value="{{$data->prenom_admin}}">
        <label for="">CIN</label>
        <input type="text" name="cin_admin" value="{{$data->cni_admin}}">
        <label for="">EMAIL</label>
        <input type="text" name="email_admin" value="{{$data->email_admin}}">
        <input type="submit">
        <a href="{{route('dashboardAdmin')}}"><button class="btn btn-primary" type="button">annuler</button></a>
    </form>
</div>

@endsection