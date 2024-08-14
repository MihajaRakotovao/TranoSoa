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
        <h1>Les utilisateurs</h1>
    </div>
    <div class="table-responsive ">
        <table class="table table-striped table-Secondary">
            <thead>
                <tr >
                    <th class="text-start">Nom</th>
                    <th class="text-start">Email</th>
                    <th>Photo</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User as $log)
                    <tr>
                        <td class="text-start">{{ $log->name }}</td>
                        <td class="text-start">{{ $log->email }}</td>
                        <td>
                            <img class="img-User" src="/storage/imageUser/{{ $log->profile}}" width="100px" alt="">
                        </td>
                        <td >
                            <form action="{{ route('SupUser', $log) }}" method="post" >
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
    {{ $User->links() }}
</div>


@endsection
