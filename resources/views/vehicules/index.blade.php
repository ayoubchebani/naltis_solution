@extends('layouts.app')
@section("content")
<div class="col-md-6 col-sm-offset-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Model</th>
      <th scope="col">Mark</th>
      <th scope="col">Year</th>
      <th scope="col">Type</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allVehicles as $vehicle)
    <tr>
      <th scope="row">{{$vehicle->model}}</th>
      <td>{{$vehicle->make}}</td>
      <td>{{$vehicle->year}}</td>
      <td>{{$vehicle->type}}</td>
      <td><a class="btn btn-primary" href="{{route('vehicules.edit',$vehicle)}}">Edit</a></td>
      <td><a class="btn btn-primary" href="{{route('vehicules.remove',$vehicle)}}">Delete</a></td>
    </tr>
       

           
        @endforeach


    </table>

    <form action="{{action("VehicleController@create")}}" method="/">
    <input type="submit" value="Add Vehicule" class="btn-lg btn-success">
    </form>
</div>
@endsection

