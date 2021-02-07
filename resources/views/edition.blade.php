@extends('master')
@section("content")
@foreach ($results as $res)
@endforeach
<?php
use App\Http\Controllers\HotelController;
$id=$res->id;
$nbrAvis=HotelController::Nbreratings($id);
?>


<div class="customer-hotel">
<h3 class="avis-hotel"> Details Avis pour Hôtels  {{$res->nomHotel}} ({{$nbrAvis}} avis) <br><br><a  href="/Stats/{{$id}}" class="btn btn-info" role="button">Synthèse</a> </h3>


<div class="col-sm-10">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Accueil</th>
        <th>Restauration</th>
        <th>Hygiène</th>
        <th>Extra</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach ($results as $res)
    <tr>
    <td>{{$res->noteAcc}}</td>
    <td> {{$res->noteRest}}</td>
    <td>{{$res->noteHyg}}</td>
    <td>{{$res->noteExtra}}</td>
    <td>{{$res->description}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>


</div>

</div>
@endsection