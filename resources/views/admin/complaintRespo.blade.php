@extends('layouts.herit_dashboard_respo')
@section('title', 'Dashboard')


@section('complaintRespo')

<div class="container mt-5" style="overflow-y: scroll">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Ville</th>
                <th scope="col">Service</th>
                <th scope="col">Type</th>
                <th scope="col">message</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compl as $item)
                <tr>
                    <td>{{ $item->nom_respo }}</td>
                    <td>{{ $item->prenom_respo }}</td>
                    <td>{{ $item->ville_rec}}</td>
                    <td>{{ $item->service_rec }}</td>
                    <td>{{ $item->type_rec }}</td>
                    <td>{{$item->message_rec}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
