@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('titre')
    Inscription
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
                    <div class="card bg-dark card-body mt-3 mb-3 text-white">
                        <h1 class="text-center">Inscription</h1>
                            <form action="{{ Route("inscription") }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group mt-2">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Example@Gmail.com" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="pwd">Mot de passe</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="pwdConf">Confirmation de mot de passe</label>
                                <input type="password" class="form-control" id="conf" name="pwdConf" required>
                            </div>
                            <div class="form-group mt-2 w-100">
                                <label for="pdp" style="font-size:30px;"><i class="fab fa-image text-center" ></i></label>
                                <input type="file" class="form-control-file" id="pdp" name="pdp">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3 " name="signin">S'inscrire</button>
                            </form>


                    </div>
            </div>
    </div>
</div>
@endsection
