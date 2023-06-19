@extends('layouts.herit_dashboard_respo')
@section('title','Service')


@section('ad_serv')

<div class="row container mt-5">
    <div class="col-md-11"></div>
    <div class="col-md-1"><a href=""> <i class="fa-solid fa-user-plus fs-3" style="color: #5353e1;"></i></a></div>
    {{-- <div class="col-md-3"><b class="fs-4 text-success mx-3 text-decoration-none mb-2">Ajouter</b><i class="fa-solid fa-plus text-success fw-bold fs-3"></i></div> --}}
</div>

<div  class="container mt-5" style="overflow-y: scroll">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom service</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serv as $item)
                <tr>
                    <td>{{ $item->nom_serv }}</td>
                    <td style="width:80px"><a href="{{route('updateServ',[$item->id_serv])}}"><i class="fa-solid fa-file-pen" style="color: #3ab007;"></i></a></td>
                    <td style="width:80px"><button id="btn" style="border:none;background:none;"
                        onclick="
                                    if (confirm('vous êtes sûre vous voulez supprimer cette  agent {{$item->id_serv}} ? ') == true) {
                                        document.getElementById('{{$item->id_serv}}').click();
                                    }
                        ">
                        <i class="fa-solid fa-trash text-danger"></i></button>
                    <a href={{ route('deleteServ', [$item->id_serv]) }} id="{{$item->id_serv}}"
                        style="display:none;"></a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
