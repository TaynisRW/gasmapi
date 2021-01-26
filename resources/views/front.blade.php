@extends('layouts.master')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-auto" href="{{ url('/')}}"><i class="fas fa-map-marker-alt"></i> GasmAPI</a>
</nav>

<div class="container">
    <h2 class="text-light mx-auto text-center">Encuentra los precios de la gasolina facilmente</h2>
    <div class="row">
        <div class="col-md-6 my-auto">
            {!! Form::open(['url' => '/locationCoords', 'id' => 'searchFuelStations']) !!}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="state"><i class="fas fa-plane-departure"></i></label>
                    </div>
                    {!! Form::select('state', $states, null, ['class' => 'custom-select', 'id' => 'state']) !!}
                </div>
                <div id="municipality"></div>
                {!! Form::submit('Buscar', ['class' => 'btn btn-outline-info mb-3']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-6" id="map"></div>
    </div>
    <div class="row table-responsive mt-2 mx-auto">
        <nav class="navbar navbar-dark bg-dark rounded-top">
            <span class="navbar-brand mb-0 h1 mx-auto">GASOLINERAS CERCANAS</span>
        </nav>
        <table class="table table-dark table-borderless table-hover">
            <thead class="table-active">
                <tr>
                    <td>Estado</td>
                    <td>Municipio</td>
                    <td>Razón Sicial</td>
                    <td>Regular</td>
                    <td>Premium</td>
                </tr>
            </thead>
            <tbody>
                <tr id="fuelStattionResults"></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
