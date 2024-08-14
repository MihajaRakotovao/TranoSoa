@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('titre')
    About
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
    <!-- About Start -->
    <div class="about" id="apropos">
        <div class="about-entente">
            <h1>Qui nous sommes ?</h1>
        </div>
        <div class="about-content">
            <div class="about-left">
                <div class="about-img1"></div>
                <div class="about-img2"></div>
                <div class="about-img3"></div>
            </div>
            <div class="about-info">
                <h1 class="text-white">Agence de location de maison à </h1>
                <h1>Antananarivo</h1>
                <p>Chez <span style="color: rgb(72, 72, 185); font-size:24px; font-weight:bolder;">Tranosoa </span>, nous comprenons que chaque maison a une histoire à raconter et que chaque locataire a des besoins uniques. C'est pourquoi notre équipe attentionnée et expérimentée travaille avec dévouement pour comprendre vos préférences, vos exigences et votre style de vie afin de vous proposer une sélection soigneusement choisie de propriétés qui correspondent à vos attentes.</p>
                <p>Que vous recherchiez une villa élégante, une maison familiale, ou un appartement moderne en centre-ville, nous avons un portefeuille diversifié de biens immobiliers de haute qualité à vous offrir. Nous nous engageons à vous fournir un service personnalisé, transparent et efficace à chaque étape du processus de location.</p>
                <p>Découvrez dès aujourd'hui comment notre expertise, notre passion et notre dévouement peuvent transformer votre recherche de location de maison en une expérience sans stress et enrichissante. Contactez-nous dès maintenant pour commencer à explorer les possibilités infinies qui s'offrent à vous avec <span style="color: rgb(72, 72, 185); font-size:24px; font-weight:bolder;">Tranosoa </span>."</p>
                <a href="{{ route('logements') }}">Cherchez un logement</a>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
