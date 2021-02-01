@extends('master')
@section("content")

<?php
if (Session::has('user'))
{
$a=$product['session'];

$a=$a['nom'];
}
else{
    $a='';
}
?>
<div class="customer-hotel">
<h3> Detail Hôtels</h3>
<h4> bonjour {{$a}} </h4>

          <div class="col-sm-4">
          <img class="trending-image" src="{{$product['gallery']}}">
                    </div>
          <div class="col-sm-8">
            
                        <div class="searched-item">
                            <a href="/"><=</a>
                              
                                <div class="">
                                    <h3>{{$product['nomHotel']}} </h3>
                                    <h5> {{$product['numTelHotel']}}</h5>
                                <a href="/editrating/{{$product['id']}}" class="btn btn-primary"> Voir Avis</a>
                                <a href="/addrating/{{$product['id']}}" class="btn btn-success">  Mettre Avis</a>
                                </div>
                          
                        
                        </div>
          </div>

</div>
@endsection