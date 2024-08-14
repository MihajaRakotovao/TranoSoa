@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('titre')Categorie @endsection {{-- TITRE DANS HEAD --}}

@section('contenue')

<!-- logement Start -->
<div class="logement">
    <div class="logement-content ">
        <div class="column">
        <h2 class=" mt-3" style="text-transform: uppercase; color: rgb(200, 212, 223);">{{$logement->titre}}</h2>
        </div>
        <div class="logement-img">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slider-button"><i class="fa fa-chevron-left"></i></button>
                <div class="image-list">
                    @foreach ($logement->images as $image)
                        <img class="image-item" src="/logement_images/{{$image->image}}" alt="">
                    @endforeach
                </div>
                <button id="next-slide" class="slider-button"><i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="logement-content-up">
            <div class="container mt-3" style="width: 100%">
                <h1>Caractéristiques</h1>
                <table class="table table-striped" style="color: white">
                    <tr>
                        <td class="text-white">Quartier</td>
                        <td class="text-end " style="color: #7092b1;">{{ $logement->adresse }}</td>
                    </tr>
                    <tr>
                        <td  class="text-white">Loyer</td>
                        <td class="text-end"><h4>{{ number_format( $logement->loyer, thousands_separator: ' ') }} Ar</h4></td>
                    </tr>
                    <tr>
                        <td  class="text-white">Nombre de piéce</td>
                        <td class="text-end text-white">{{$logement->piece}}</td>
                    </tr>
                    <tr>
                        <td  class="text-white">Nombre de Chambre</td>
                        <td class="text-end">{{$logement->chambre}}</td>
                    </tr>
                    <tr>
                        <td  class="text-white">Situé</td>
                        <td class="text-end text-white">
                            @if ($logement->etage != 0)
                                étage {{ $logement->etage }}

                            @else
                                Au rez de chaussé
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td  class="text-white">Statut</td>
                        @if ($logement->statut != 0)
                            <td class="text-end " style="color: Red;">
                                Réservé
                            </td>
                        @else
                            <td class="text-end text-primary">
                                à louer
                            </td>
                        @endif
                        </td>
                    </tr>

                </table>
            </div>

        </div>

        {{-- <div class="logement-content-up-container">
        </div> --}}
        <div class="logement-content-down">
            <div class="description">
                <h1>Description du bien :</h1>
                <p>{!!$logement->description!!}</p>
            </div>
            <div class="specifiques">
                <h1>Autres détaille du bien :</h1>
                    @foreach ($logement->options as $option )
                        <p class="text-white">✅ {{ $option->name }}</p>
                    @endforeach
            </div>
        </div>
        @if (@session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="logement-content-down">
            <img class="w-50" src="{{ asset('img/log2.png') }}" alt="">
            <div class="container">
                @if ($logement->statut != 0)
                <div class="text-center" style="color: Red;">
                    Déjà loué
                </div>
                @else
                    @if (Session::has("user"))
                        <h1>Nous contacter pour ce logement</h1>
                        <form action="{{ route('mailaka', $logement) }}" method="post" class="form-group ">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="Nom">Nom</label>
                                    <input type="text" name="Nom"  class=" form-control @error('Nom') is-invalid @enderror" value="{{ Session::get("user")->name }}">
                                </div>
                                <div class="col">
                                    <label for="Prenom">Prénom</label>
                                    <input type="text" name="Prenom" class=" form-control @error('Prenom') is-invalid @enderror" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Phone">Tél / Ex : +261343318088</label>
                                    <input type="text" name="Phone" class="col form-control @error('Phone') is-invalid @enderror" value="+261">
                                </div>
                                <div class="col">
                                    <label for="Email">Email</label>
                                    <input type="email" name="Email" class="col form-control @error('Email') is-invalid @enderror" value="{{ Session::get("user")->email }}">
                                </div>
                            </div>
                            <label for="Message">Votre message</label>
                            <textarea name="Message" class="col form-control @error('Message') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
                            <div class="row d-flex al-center justify-content-center">
                                <button class="btn btn-primary mt-3 w-50 ">Envoyer</button>
                            </div>
                        </form>
                    @else
                        <h1>Nous contacter pour ce logement</h1>
                        <p>Veuillez vous inscrire !! <a href="{{ route('signin') }}">s'inscrire</a></p>
                    @endif
                @endif

            </div>

        </div>

    </div>
</div>
<!-- logement End -->

@endsection

