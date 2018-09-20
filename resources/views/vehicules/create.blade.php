@extends('layouts.app')
@section("content")
<div class="col-md-6 col-sm-offset-3">
    <div class="block-header">
        <h2 class="col-sm-offset-4">Add new vehicle</h2>
    </div>
    <form action="{{action("VehicleController@store")}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="model">Model:</label>
            <input name="model" id="model" class="form-control">
        </div>
        <div class="form-group">
            <label for="make">Mark:</label>
            <input name="make" id="make" class="form-control">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input name="year" id="year" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input name="type" id="type" class="form-control">
        </div>

        <input type="submit" value="Confirm" class="btn-lg btn-success">
    </form>

</div>
@endsection

