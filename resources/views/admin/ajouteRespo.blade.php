@extends('layouts.herit_dashboard_respo')
@section('title','responsable')

@section('ajouteRespo')
<div class="container mt-5">
    @if (Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
    @endif
    <form action="{{route('insertRespo')}}" method="POST">
        @csrf
        <label for="">NOM</label>
        <input type="text" name="nom_respo" required>
        <label for="">PRENOM</label>
        <input type="text" name="prenom_respo" required>
        <label for="">CIN</label>
        <input type="text" name="cin_respo" required>
        <label for="">ADRESSE</label>
        <input type="text" name="adresse_respo" required>
        <label for="">EMAIL</label>
        <input type="email" name="email_respo" required>
        <label for="">TELE</label>
        <input type="text" name="tele_respo" required>
        <label for="">Ville TRAVAILLE</label>
        <input type="text" name="ville_trav" required>
        <label for="">PASSWORD</label>
        <input type="password" name="password_respo" required><br><br>
        <input type="submit"><br><br>
    </form>
</div>
@endsection
