@extends('layouts.app')
@section('content')
<div class="listado" style="width:80%;margin-left:10%;">
    <table class="table md-7" >
      <thead class=" encabezadoFormulario text-white " >
        <tr>
          <th scope="col">ITEM</th>
          <th scope="col">HORA</th>
          <th scope="col">PLACAS</th>
          <th scope="col"># RUTA</th>
          <th scope="col">DESPACHO</th>
          <th scope="col">OBSERVACIONES</th>
        </tr>
      </thead>
      <tbody style="background:white;">
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><option>
          <select>SI</select>
          <select>NO</select>
          </option></td>
          <td>Ninguna</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><option>
          <select>SI</select>
          <select>NO</select>
          </option></td>
          <td>Ninguna</td>
        </tr>
      </tbody>
    </table>
    </div>
</div>
@endsection