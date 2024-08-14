@extends('layouts\layoutAdmin.masterAdmin') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
    <div class="container ">
        <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option)}}" method="post">
            @csrf
            @method($option->exists ? 'put' : 'post' )
            <div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Nom de l'option" name="name" value={{ $option->name }} >
                </div>
                @error('name')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button class="btn btn-primary">
                    @if($option->exists)
                        Modifier
                    @else
                        Ajouter
                    @endif
                </button>
            </div>

        </form>
    </div>
@endsection
