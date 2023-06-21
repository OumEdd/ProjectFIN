@extends('layouts.herit_dashboard_agent')
@section('title','Dashboard')

@section('pageSuggestion')

<div class="container mt-5" style="overflow-y: scroll">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ville</th>
                <th scope="col">service</th>
                <th scope="col">message</th>
                <th style="width: 120px;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($table as $item)
                <tr>
                    <td>{{ $item['ville_rec'] }}</td>
                    <td>{{ $item['service_rec']}}</td>
                    <td>{{ $item['message_rec']}}</td>
                    <td style="width: 120px;"><a href="{{route('traiteRec',[$item['id_rec']])}}"><button class="btn btn-primary">traité</button></a></td>                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
