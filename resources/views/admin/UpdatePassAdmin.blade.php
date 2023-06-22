@extends('layouts.herit_dashboard_respo')
@section('title','mot de passe')

@section('updatePassAdmin')

<div class="container mt-5">
    @if (Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
    @endif
    @if (Session::has('fail'))
    <div class="alert alert-danger">{{session::get('fail')}}</div>
    @endif
    <form action="{{route('changerMotPasseAdmin')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mot de passe actuel</label>
            <input type="password" class="form-control" style="height:45px" id="colFormLabelSm" name="passeActuel" >
        </div>
        @error('passeActuel')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nouveau mot de passe</label>
            <input type="password" class="form-control" style="height:45px" id="colFormLabelSm" name="password" >
        </div>
        @error('password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Confirmation mot de passe</label>
            <input type="password" class="form-control" style="height:45px" id="colFormLabelSm"
                name="password_confirmation">
        </div>
        @error('password_confirmation')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
        <input type="submit">
    </form>
</div>

@endsection