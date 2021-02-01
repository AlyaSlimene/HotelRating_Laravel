@extends('master')
@section("content")
<div class="customer-hotel">

          <div class="col-sm-4">
             <a href="#"> filter</a>
          </div>
          <div class="col-sm-8">
            <h3> Resultat de recherche des Hôtels<h3>
                  @foreach($products as $item)
                        <div class="searched-item">
                            <a href="detail/{{$item['id']}}">
                              <img class="trending-image" src="{{$item['gallery']}}">
                                <div class="">
                                    <h3>{{$item['nomHotel']}} </h3>
                                    <h5> {{$item['numTelHotel']}}</h5>
                                </div>
                            </a>
                        
                        </div>
                   @endforeach
          </div>

</div>
@endsection