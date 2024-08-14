@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')

    <div class="fond-container">
        <img class="fond-logo" src="{{ asset('img/log3.png') }}" alt="">
        <div class="fond-content">
            <h1 class="text-white">Agence de location de maison à </h1>
            <h1>Antananarivo</h1>
            <p>Bienvenue chez Tranosoa, votre partenaire de confiance pour trouver le refuge idéal que vous appelez 'chez vous'. Nous sommes déterminés à simplifier votre recherche de la maison parfaite, que ce soit pour une courte période ou pour une résidence à long terme.</p>
            <a href="{{ route('logements') }}" >Cherchez un logement</a>
            <img width="70vh" src="{{ asset('img/log.png') }}" alt="Logo">
        </div>
    </div>

    <!-- Saerch Start -->
    <div class="search">
        <div class="search-entente">
            <h1 class="text-white" >Nous sommes à votre service !</h1>
            <p class="text-white" >Cherchez et trouvez en un Click! votre logement </p>
        </div>
        <div class="search-content">
            <div class="search-form">
                <form action="{{ route('logements') }}" method="get" >
                    <label for="quartier" class="text-white"> Quartier</label>
                    <select name="quartier" class="form-control" id="">
                        @php
                            $i = 0;
                        @endphp
                        <option value="">Quartier</option>
                        @foreach ($logement as $log)
                            <option value="{{ $i++ }}">{{$log->adresse}}</option>
                        @endforeach
                    </select>
                    <label for="piece" class="text-white"> Nombre de piéces</label>
                    <input type="number"  class="form-control" name="piece" id="" min="1" max="10" placeholder="0">
                    <label for="BudgetMax " class="text-white"> Budget</label>
                    <select name="budget" class="form-control" id="">
                        <option value="">Budget</option>
                        <option value="1">50000 - 100000</option>
                        <option value="2">200000 - 300000</option>
                        <option value="3">400000 - 1000000</option>
                        <option value="4">1050000 - 2000000</option>
                        <option value="5">2050000 - 3000000</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Cherchez</button>
                </form>
                <span class="text-white" >Rechercher votre futur logement</span>
            </div>
            <div class="search-carousel">
                <img class="search-image" src="{{ asset('img/fond4.jpg') }}" alt="">
                <img class="search-image" src="{{ asset('img/fond2.jpg') }}" alt="">
                <img class="search-image" src="{{ asset('img/fond4.jpg') }}" alt="">
            </div>
        </div>

    </div>
    <!-- Search End -->

    <!-- About Start -->
    <div class="about" id="apropos">
        <div class="about-entente">
            <h1 class="text-white" >Qui sommes nous ?</h1>
        </div>
        <div class="about-content">
            <div class="about-left">
                <div class="about-img1"></div>
                <div class="about-img2"></div>
                <div class="about-img3"></div>
            </div>
            <div class="about-info">
                <h1 class="text-white" >Agence de location de maison à </h1>
                <h1 >Antananarivo</h1>

                <p> Fondée en 2024 , chez <span style="color: rgb(192, 192, 255); font-size:30px; font-family: 'Yellowtail'; ">Tranosoa </span>, nous comprenons que chaque maison a une histoire à raconter et que chaque locataire a des besoins uniques. C'est pourquoi notre équipe attentionnée et expérimentée travaille avec dévouement pour comprendre vos préférences, vos exigences et votre style de vie afin de vous proposer une sélection soigneusement choisie de propriétés qui correspondent à vos attentes.</p>

                <a href="{{ Route('signin') }}">Devenez membre et publiez une annonce </a>

                <a  href="{{ route('logements') }}">Cherchez un logement</a>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Category Start -->
        <div class="categorie">
            <div class="categorie-filtre">
                <h1 class="text-white">{{ count($AllLogement) }} logements</h1>
            </div>
            <div class="categorie-content">
                @foreach ($logement as $logement)
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
                @endforeach

            </div>
        </div>
    <!-- Category End -->

    <!-- Client Start -->
    <div class="client">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="Testimoniale">
        <div class="container">
            <h1 class="text-center text-white">Nos membres</h1>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($message as $sms)
                <div class="testimonial-item bg-dark rounded" style="padding: 10px; border-radius:10px; ">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p class="text-white">{{$sms->coms }}</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded " id="imgCli" src="/storage/imageUser/{{$sms->profile}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1 text-white">{{$sms->name }}</h5>
                            <small class="text-primary">Membre</small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
    <!-- Client End -->


@endsection
