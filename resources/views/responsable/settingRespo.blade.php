@extends('layouts.herit_dashboard_agent')
@section('title','setting')

@section('settingRespo')

<div class="container">
    @if (Session::has('succes'))
        <div class="alert alert-success">{{session::get('succes')}}</div>
    @endif
    <form action="{{route('updateSettingRespo')}}" method="POST">
        @csrf
        <label for="">NOM</label>
        <input type="text" name="nom_respo" value="{{$data->nom_respo}}">
        <label for="">PRENOM</label>
        <input type="text" name="prenom_respo" value="{{$data->prenom_respo}}">
        <label for="">CIN</label>
        <input type="text" name="cin_respo" value="{{$data->cin_respo}}">
        <label for="">ADRESSE</label>
        <input type="text" name="adresse_respo" value="{{$data->adresse_respo}}">
        <label for="">EMAIL</label>
        <input type="text" name="email_respo" value="{{$data->email_respo}}">
        <label for="">TELE</label>
        <input type="text" name="tele_respo" value="{{$data->tele_respo}}"><br><br>
        <input type="submit">
        <a href="{{route('dashboardRespo')}}"><button class="btn btn-primary" type="button">annuler</button></a>
    </form>
</div>

@endsection