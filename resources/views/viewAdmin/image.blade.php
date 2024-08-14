@extends('layouts\layoutAdmin.masterAdmin') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
        <div class="contenair-fluid m-3">
                <h2>Image logement <span class="text-primary">: {{ $logement->titre }}</span></h2>
                <a href="{{ route('admin') }}" class="btn btn-primary">Go back</a>
                <div class="row mt-4">
                    @foreach ($images as $image )
                        <div class="col-md-3">
                            <div class="card text-white bg-secondary mb-3 d-flex" style="max-width:10rem;">
                                <div class="card-body d-flex " style="position: relative;">
                                    {{-- <a href="{{ route('SupImg',$image) }}" style="position: absolute;">❌</a> --}}
                                    <form action="{{ route('SupImg', $image->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"  style="position: absolute;">❌</button>
                                    </form>
                                    <img src="/logement_images/{{$image->image}}" alt="" style="width: 100%" class="card-img-top">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>

@endsection
