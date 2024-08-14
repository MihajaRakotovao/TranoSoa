@extends('layouts\layoutAdmin.masterAdmin') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
    <div class="container" >
        <div id="main-content" class="container allContent-section py-4">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-3">
                    <div class="card p-2">
                        <a href="{{Route('user')}}">
                            <i class="fa fa-users  mb-2" style="font-size: 70px; color:black;"></i>
                        </a>
                        <h4 style="color:black;">Total Utilisateur</h4>
                        <h5 style="color:black;">
                            => {{ $user->count() }}
                        </h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-2">
                        <a href="{{Route('admin')}}">
                            <i class="fa fa-home mb-2" style="font-size: 70px; color:black;"></i>
                        </a>
                        <h4 style="color:black;">Total Logement</h4>
                        <h5 style="color:black;">
                           => {{ $logement->count() }}
                       </h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-2">
                        <a href="{{Route('option')}}">
                            <i class="fa fa-list mb-2" style="font-size: 70px; color:black;"></i>
                        </a>
                        <h4 style="color:black;">Total Option</h4>
                        <h5 style="color:black;">
                           => {{ $option->count() }}

                       </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
