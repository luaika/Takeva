@extends('layouts.app')
@section('content')

<div class="listado" style="width:80%;margin-left:10%;">
    <table class="table">
      <thead class="encabezadoFormulario text-white " >
        <tr>
          <th scope="col"></th>
          <th scope="col">Hora</th>
          <th scope="col">Placa</th>
          <th scope="col"># Ruta</th>
          <th scope="col">Despacho</th>
          <th scope="col">Observaciones</th>
        </tr>
      </thead>
      <tbody style="background:white;">
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><select style="width:37%" class="custom-select" required>
            <option>Si</option>
            <option>No</option>
          </select>
          </td>
          <td>Ninguna</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><select style="width:37%" class="custom-select" required>
                <option>Si</option>
                <option>No</option>
              </select>
          </td>
          <td>Ninguna</td>
        </tr>
      </tbody>
    </table>
    </div>
</div>
@endsection
