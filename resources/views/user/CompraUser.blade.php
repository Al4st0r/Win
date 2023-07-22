@extends('layout.AdminLayout')
@section('contenido')
<br>
<br>
<div class="container">
<form class="row g-3" action="{{route('contratos.store')}}" method="POST">

    @csrf

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="cold-md-6">
        <label for="inputPassword4" class="form-label">Fecha</label>
      <input type="date" class="form-control" name="fecha">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Contrato</label>
      <select id="inputState" class="form-select" name="contrato">
        <option selected name="contrato">Telvision Digital</option>
        <option selected name="contrato">Telefonia</option>
        <option selected name="contrato">Planes Gamer</option>
      </select>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Adquirir Contrato</button>
    </div>
  </form>
</div>
  <br>
  <br>
  @endsection
