@extends('layouts.herit_dashboard_respo')
@section('title','responsable')

@section('ajouteServ')
<div class="container mt-5">
    @if (Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
    @endif
    <form action="{{route('insertServ')}}" method="POST">
        @csrf
        <label for="">NOM SERVICE</label>
        <input type="text" name="nom_serv" required><br><br>
        <input type="submit"><br><br>
    </form>
</div>
@endsection
