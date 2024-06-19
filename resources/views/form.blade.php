@extends('layout')

@section('title','Document')

@section('content')
<div>
    <form action="{{ route('login.validate') }}" method="post">
    @csrf
    <div>
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">Enviar</button>

        </form>  
    </div> 

@endsection
    
