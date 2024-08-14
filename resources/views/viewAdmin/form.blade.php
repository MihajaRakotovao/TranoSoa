@extends('layouts\layoutAdmin.masterAdmin') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
    <div class="container ">
        <form action="{{ route($logements->exists ? 'admin.logement.update' : 'admin.logement.store', $logements)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method($logements->exists ? 'put' : 'post' )
            <div class="row">
                <div class="mb-3 col mt-3">
                    <label for="titre" class="form-label">Titre :</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" placeholder="Titre" name="titre" value={{ $logements->titre }} >
                </div>
                @error('titre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3 col mt-3">
                    <label for="adresse " class="form-label"> Adresse :</label>
                    <input type="text" class="form-control  @error('adresse') is-invalid @enderror" id=" " placeholder="Adresse " name="adresse" value={{ $logements->adresse }}>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col mt-3">
                    <label for="chambre " class="form-label"> Chambre :</label>
                    <input type="text" class="form-control  @error('chambre') is-invalid @enderror" id=" " placeholder="1" name="chambre" value={{ $logements->chambre }}>
                </div>
                <div class="mb-3 col mt-3">
                    <label for="loyer " class="form-label"> Loyer :</label>
                    <input type="text" class="form-control  @error('loyer') is-invalid @enderror" id=" " placeholder="Loyer " name="loyer" value={{ $logements->loyer }}>
                </div>

                <div class="mb-3 col mt-3">
                    <label for=" pieces" class="form-label"> Pieces:</label>
                    <input type="text" class="form-control  @error('piece') is-invalid @enderror" id=" " placeholder="2" name=" piece" value={{ $logements->piece }}>
                </div>
                <div class="mb-3 col mt-3">
                    <label for="adresse " class="form-label"> Etages :</label>
                    <input type="text" class="form-control  @error('etage') is-invalid @enderror" id=" " placeholder="1" name="etage" value={{ $logements->etage }}>
                </div>
                <div class="mb-3 col mt-3">
                    <label for="file " class="form-label"> Ajouter d'autres image :</label>
                    <input type="file" accept="image/*" class="form-control  @error('image') is-invalid @enderror" name="images[]" multiple>
                    {{-- @foreach ($images as $a) --}}
                        {{-- <img src="/logement_images/'{{$image}}" width="100px" alt=""> --}}
                    {{-- @endforeach --}}
                </div>
            </div>
            <div class="form-check form-switch mb-3">
                  <input type="hidden" value="0" name="statut">
                  <input class="form-check-input @error('statut') is-invalid @enderror"  @checked($logements->statut ?? false ) type="checkbox"  value="1" name="statut" role="switch">
                  <label for="" class="from-check-label">Déjà loué</label>
            </div>
            <div class="mb-3 col">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror">{{ $logements->description }}</textarea>
            </div>
            {{-- @php
                $value = $logements->options()->pluck('id')
            @endphp --}}
            <div class="mb-3 col">
                <label for="options" class="form-label">Options :</label>
                <select class="form-select w-50 @error('options') is-invalid @enderror"    id="options" name="options[]" multiple='true'>
                    {{-- value={{$logements->options()->pluck('id')}} --}}
                    @foreach ($options as $a => $b)
                        <option @selected($logements->options()->pluck('id')->contains($a)) value="{{ $a }}"  >{{ $b }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary">
                    @if($logements->exists)
                        Modifier
                    @else
                        Ajouter
                    @endif
                </button>
            </div>

        </form>
    </div>
@endsection
