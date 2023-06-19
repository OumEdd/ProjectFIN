@extends('layouts.herit_dashboard_respo')
@section('title', 'responsable')

@section('updateRespo')
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
        <form action="{{ route('ModifyRespo', [$respo->id_respo]) }}" method="POST">
            @csrf
            <div>
                <label for="">nom</label>
                <input type="text" value="{{ $respo->nom_respo }}" name="nom_respo">
            </div>
            <div>
                <label for="">prenom</label>
                <input type="text" value="{{ $respo->prenom_respo }}" name="prenom_respo">
            </div>
            <div>
                <label for="">adresse</label>
                <input type="text" value="{{ $respo->adresse_respo }}" name="adresse_respo">
            </div>
            <div>
                <label for="">email</label>
                <input type="text" value="{{ $respo->email_respo }}" name="email_respo">
            </div>
            <div>
                <label for="">tele</label>
                <input type="text" value="{{ $respo->tele_respo }}" name="tele_respo">
            </div><br><br>
            <div class="" style="display: flex">
                <input type="submit" style="width:100px;margin-right:10px">
                <a href="{{ route('ad_respo') }}"><button type="button" class="btn btn-primary" style="padding: 17px">Annuler</button></a>
            </div>
        </form>
    </div>
@endsection
