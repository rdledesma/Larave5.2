@extends('layouts.admin')
@section('contenido')

<h2>Editando usuario</h2>
<form method="post" action="{{ route('usuario.update', $user->id) }}">
            @method('PATCH') 
            @csrf
        @include('usuario.form', ['user' =>$user])
</form>

@endsection()