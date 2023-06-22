@extends('layouts.herit_dashboard_respo')
@section('title','responsable')

@section('ajouteVille')
<div class="container mt-5">
    @if (Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
    @endif
    <form action="{{route('insertVille')}}" method="POST">
        @csrf
        <label for="">NOM VILLE</label>
        <input type="text" name="nom_ville" required><br><br>
        <input type="submit"><br><br>
    </form>
</div>
@endsection
