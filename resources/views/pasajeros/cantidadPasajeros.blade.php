
@extends('layouts.app')
@section('content')

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th style="padding: 3% 0%">Cantidad Pasajeros Movilizados</th>
        <th style="width: 10%; padding: 2% 0%"><a href="#"><img class="logoExcel" src="{{ asset('images/logoExcel.png') }}"></a></th>
      </tr>
    <thead>
</table>

<table class="table">
  <thead class="tablaPasajeros">
    <tr>
      <th scope="col"></th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Placa</th>
      <th scope="col">Ruta</th>
      <th scope="col" style="width:20%;">Cantidad Pasajeros</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
    <tr>
      <th scope="row">1</th>
      <td>21-05-2020</td>
      <td>12:00</td>
      <td>KYC34B</td>
      <td>Numero1</td>
      <td>14</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>12-05-2020</td>
        <td>03:00</td>
        <td>BCD34B</td>
        <td>Numero2</td>
        <td>10</td>
      </tr>
  </tbody>
</table>
</div>

@endsection
