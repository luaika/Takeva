@extends('layouts.app')
@section('content')


<div class="container">

  <div class="row">
    <div class="col-sm-6">
      <div class="card border-primary cardComparativos">
        <div class="card-header border-primary">Comparativos</div>
        <div class="card-body">
          <p class="card-text"><img class="imgComparativos" src="{{ asset('images/Comparativos.jpg') }}"></p>
          <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card border-primary cardComparativos">
        <div class="card-header border-primary">Históricos</div>
        <div class="card-body">
            <p class="card-text"><img class="imgHistoricos" src="{{ asset('images/historicos.png') }}"></p>
             <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
