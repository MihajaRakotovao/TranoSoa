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
        <h1>Les Annonces</h1>
    </div>
    <div class="table-responsive ">
        <table class="table table-striped table-Secondary">
            <thead>
                <tr >
                    <th class="text-start">Nom</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($message as $log)
                    <tr>
                        <td class="text-start">{{ $log->name }}</td>

                        <td >
                            <form action="" method="post" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $message->links() }}
</div>


@endsection
