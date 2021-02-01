@extends('master')
@section('content')
<?php use Illuminate\Support\Facades\URL;
echo URL::current(); ?>
<div class="container custom-login"> 
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
                <H3> bonjour </H3>
                <form action="/valrating" method="POST">
                @csrf
                <input type="hidden" name="idhot" value="{{$rating['idHotel']}}">
                    <div class="form-group form-check">
                        <label class="form-check-label"> Accueil:</label>
                        <input class="form-check-input" type="radio" name="acc" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="acc" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="acc" value="1"> Peu Satisfaisant
                        
                    </div>
                    
                    <div class="form-group form-check">
                        <label class="form-check-label"> Restauration:</label>
                        <input class="form-check-input" type="radio" name="res" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="res" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="res" value="1"> Peu Satisfaisant
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label"> Hygiene:</label>
                        <input class="form-check-input" type="radio" name="hyg" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="hyg" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="hyg" value="1"> Peu Satisfaisant
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label"> Extra:</label>
                        <input class="form-check-input" type="checkbox" name="extra1" value="3"> Piscine couverte
                        <input class="form-check-input" type="checkbox" name="extra2" value="2"> Plage privée
                        <input class="form-check-input" type="checkbox" name="extra3" value="1"> Couverture Wifi
                        
                    </div>
                    <div class="form-group form-check">
                    <label class="form-check-label"> Autres Remarques:</label>
                        <textArea  name="desc" type="email" placeholder="Mettez  remarques ici"></textArea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
        </div >
    </div>
</div>
@endsection