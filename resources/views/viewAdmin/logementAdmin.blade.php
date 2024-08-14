@extends('layouts\layoutAdmin.masterAdmin') {{-- MI-HERITE NY MASTER --}}
@section('title')
        TranoSOA
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
<div class="container">
    @if (@session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between align-items-center">
        <h1>Les logements</h1>
        <a href={{ route('admin.logement.create') }} class="btn btn-primary"> Ajouter un logement</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-start">Titre</th>
                <th class="text-start">Adresse</th>
                <th class="text-start">Loyer</th>
                <th class="text-start">Statut</th>
                <th class="text-start">Images</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($logement as $log)
                <tr>
                    <td class="text-start">{{ $log->titre }}</td>
                    <td class="text-start">{{ $log->adresse }}</td>
                    <td class="text-start">{{ number_format( $log->loyer, thousands_separator: ' ') }} Ar</td>
                    <td class="text-start">
                        @if ($log->statut != 0)
                                Déja Loué
                            @else
                                A louer
                            @endif
                    </td>
                    <td class="text-start"><a href="{{ route('post',$log->id)}}" class="view">Voir</a></td>
                    <td class="d-flex justify-content-end">
                        <a href="{{ route('admin.logement.edit', $log) }}" class="btn btn-primary " >Modifier</a>
                        <form action="{{ route('admin.logement.destroy', $log) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $logement->links() }}
</div>


@endsection
