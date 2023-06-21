@extends('layouts.herit_dashboard_agent')
@section('title', 'Dashboard')

@section('pageTraitRec')
    <div class="container mt-5" style="overflow-y: scroll">
        @if (Session::has('succes'))
            <div class="alert alert-success">{{ session::get('succes') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ session::get('fail') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ville</th>
                    <th scope="col">service</th>
                    <th scope="col">message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $rec->ville_rec }}</td>
                    <td>{{ $rec->service_rec }}</td>
                    <td>{{ $rec->message_rec }}</td>
                </tr>
            </tbody>
        </table>

        <div class="message text-center">
            <form action="{{ route('ajoutRec', [$rec->id_rec]) }}" method="POST">
                @csrf
                <textarea name="message" id="" cols="100" rows="10"></textarea><br>
                <div class="sub">
                    <input type="submit" value="Envoyer">
                    <a href=""><button class="btn btn-primary">annuler</button></a>
                </div>
            </form>
        </div>
    </div>

@endsection
