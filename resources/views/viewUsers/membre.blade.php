@extends('layouts\layoutUser.master')
@section('titre')
 TranoSoa-Membre
@endsection
@section('contenue')
 <!-- produit -->
<div class="container mt-5 " style="height: auto;">
    @if (@session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
     <div class="row mt-5">
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/imageUser/'.Session::get('user')->profile) }}" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <h5 class="card-title text-white"> BIenvenue {{ Session::get('user')->name }} !</h5>
            <p class="card-text">E-mail : {{ Session::get('user')->email}}</p>
        </div>
     </div>
     <div class="form-group w-50 " >
        @if (Session::has("user"))
            <form action="{{ Route("comments") }}" method="post">
            @csrf
            <textarea name="commentaire" id="" cols="10" rows="5" class="form-control mt-3 mb-3" placeholder="Votre message" style="resize: none;"></textarea>
            <input type="submit" value="Commenter" class="btn btn-primary mb-3">
        </form>
        @endif
    </div>
 </div>
@endsection



