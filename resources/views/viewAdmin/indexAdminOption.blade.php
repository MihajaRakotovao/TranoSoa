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
        <h1>Les options</h1>
        <a href={{ route('admin.option.create') }} class="btn btn-primary"> Ajouter une option</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-start">Nom</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($option as $log)
                    <tr>
                        <td class="text-start">{{ $log->name }}</td>
                        <td class="d-flex justify-content-end">
                                <a href="{{ route('admin.option.edit', $log) }}" class="btn btn-primary" >Modifier</a>
                                <form action="{{ route('admin.option.destroy', $log) }}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    {{ $option->links() }}
</div>


@endsection
