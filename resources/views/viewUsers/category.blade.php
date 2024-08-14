@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('titre')Categorie @endsection {{-- TITRE DANS HEAD --}}

@section('contenue')

<!-- Category Start -->
<div class="categorie">
    <h1 class="mt-3">{{ $logements->count() }} logements</h1>
    <div class="categorie-filtre">
        <form action="" method="get" class=" d-flex justify-content-left">
            <div class="container gap-2">
                <div class="row">
                    <div class="col-6">
                        <label for="" class="text-white mt-3">Budget</label>
                        <select name="budget" class="form-control" id="" >
                        <option value="">Budget</option>
                            <option value="1">50000 - 100000</option>
                            <option value="2">200000 - 300000</option>
                            <option value="3">400000 - 1000000</option>
                            <option value="4">1050000 - 2000000</option>
                            <option value="5">2050000 - 3000000</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="" class="text-white mt-3">Quartier</label>
                        <select name="quartier" class="form-control" id="">

                            <option value="">Quartier</option>
                            @foreach ($logements as $log)
                                <option value="{{$log->adresse}}">{{$log->adresse}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="text-white mt-3">Nombre de chambre</label>
                        <input class="form-control" type="number" placeholder="Nb chambre" name="chambre" id="" value="{{ $input['chambre'] ?? ' ' }}">
                    </div>
                    <div class="col-6">
                        <label for="" class="text-white mt-3">Nombre de piéce</label>
                        <input class="form-control" type="number" placeholder="Nb piece" name="piece" id="" value="{{ $input['piece'] ?? ' ' }}">
                    </div>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary btn-sm flex-grow-0 ">
                        Rechercher
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="categorie-content mt-5">
        @forelse ($logements as $logement)
        <div class="cat-carte">
            <a href="{{ route('offres', $logement) }}">
                <div class="cat-carousel">
                    @foreach ($logement->images as $image)
                    <img class="cat-image"  src="/logement_images/{{$image->image}}" alt="">
                    @endforeach
                </div>
                <p>{{ $logement->created_at }}</p>
                @if ($logement->statut != 0)
                <a style="color: red"> Réservé</a>
                @else
                <a style="color: rgb(21, 207, 46)">à louer</a>
                @endif
                <h2>{{$logement->titre}}</h2>
                <p class="text-white">{{$logement->piece}} pieces avec {{$logement->chambre}} chambres</p>
                <h4>{{number_format($logement->loyer, thousands_separator : ' ')}} Ar</h4>
            </a>
        </div>
        @empty
            <div class="container d-flex justify-content-center">
                <p class="text-white">Aucun logement trouvé</p>
            </div>
        @endforelse

    </div>
    <div class="container mt-4">
        {{ $logements ->links() }}
    </div>

</div>
<!-- Category End -->

@endsection
