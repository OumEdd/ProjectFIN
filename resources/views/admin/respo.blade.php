@extends('layouts.herit_dashboard_respo')
@section('title','responsable')


@section('ad_respo')
<div class="row container mt-5">
    <div class="col-md-11"></div>
    <div class="col-md-1"><a href=""> <i class="fa-solid fa-user-plus fs-3" style="color: #5353e1;"></i></a></div>
    {{-- <div class="col-md-3"><b class="fs-4 text-success mx-3 text-decoration-none mb-2">Ajouter</b><i class="fa-solid fa-plus text-success fw-bold fs-3"></i></div> --}}
</div>
<div class="container mt-5" style="overflow-y: scroll">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respo as $item)
                <tr>
                    <td>{{ $item->nom_respo }}</td>
                    <td>{{ $item->prenom_respo }}</td>
                    <td>{{ $item->adresse_respo}}</td>
                    <td>{{ $item->email_respo }}</td>
                    <td>{{ $item->tele_respo }}</td>
                    <td> <a href="{{route('updateRespo',[$item->id_respo])}}"><i class="fa-solid fa-file-pen" style="color: #3ab007;"></i></a></td>
                    <td><button id="btn" style="border:none;background:none;"
                        onclick="
                                    if (confirm('vous êtes sûre vous voulez supprimer cette  agent {{$item->id_respo}} ? ') == true) {
                                        document.getElementById('{{$item->id_respo}}').click();
                                    }
                        ">
                        <i class="fa-solid fa-trash text-danger"></i></button>
                    <a href={{ route('deleteRespo', [$item->id_respo]) }} id="{{$item->id_respo}}"
                        style="display:none;"></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
