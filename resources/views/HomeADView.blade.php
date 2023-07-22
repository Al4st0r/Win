@extends('layout.AdministradoLayout')
@section('Admin')

<h1>Bienvenido de nuevo {{ Auth::user()->name }}</h1>
@endsection
