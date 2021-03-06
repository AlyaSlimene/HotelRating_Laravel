@extends('master')
@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if(session('echec'))
    <div class="alert alert-danger">
        {{ session('echec') }}
    </div>
@endif
<div class="custom-hotel"> 
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel_bg" role="listbox">
    @foreach ($hotels as $item)
    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
      <img class="slider-img "src="{{$item['gallery']}}">
      <div class="carousel-caption">
      <h3 align="right">{{$item['nomHotel']}}</h3>
      <p align="right"> {{$item['numTelHotel']}} </p>
      </div>
      </a>
    </div>
    @endforeach
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Choix de l'hôtel
    <span class="caret"></span>
  </button>
  @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
  @foreach ($hotels as $item)
    <li><a href="/editrating/{{$item->id}}">{{ $item->nomHotel }}</a></li>
    
    <li role="separator" class="divider"></li>
    @endforeach 
  </ul>
</div>
<a  href="#" class="btn btn-info" role="button">Synthèse</a>
</div>
 
    
 

@endsection