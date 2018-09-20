@extends('layouts.app')
@section("content")
<div class="col-md-6 col-sm-offset-3">
    <div class="block-header">
        <h2 class="col-sm-offset-4">Edit Vehicule</h2>
    </div>
    <form action="{{action("VehicleController@update",$vehicle->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="model">Model:</label>
            <input name="model" id="model" class="form-control" value="{{$vehicle->model}}">
        </div>
        <div class="form-group">
            <label for="make">Mark:</label>
            <input name="make" id="make" class="form-control" value="{{$vehicle->make}}">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input name="year" id="year" class="form-control" value="{{$vehicle->year}}">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input name="type" id="type" class="form-control" value="{{$vehicle->type}}">
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" value="Confirm" class="btn btn-primary">
    </form></div>


@endsection

