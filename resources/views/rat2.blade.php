@extends('master')
@section('content')
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Evaluation d'hôtel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<style>
.error{ color:red; } 
</style>
</head>
<body>
<div class="container custom-login"> 
<h2 style="margin-top: 10px;">Laravel 5.7 Jquery Form Validation Example - Tutsmake.com</h2>
<br>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
<br>
@endif
<?php
/*
<script type="text/javascript" src="JS/jquery-3.2.1.js"></script>

<?php use Illuminate\Support\Facades\URL;
echo URL::current(); 
<input type="hidden" name="idhot" value="{{$rating['idHotel']}}">
?>*/

use App\Models\Hotel;
$hotels=Hotel::all();
?>



    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
                <H3> bonjour </H3>
                <div id="errorDiv"></div>
                <form id="Formadd" action="/valrating" method="POST">
                @csrf

                
                <div class="form-group">
                        <label for="sel1"> Choix Hôtel:</label>
                        <select class="form-control" id="sel1" name="hotel"> 
                        <option value="">Sélèctionner l'hôtel à évaluer</option>
                           @foreach ($hotels as $hot)
                            <option value="{{$hot['id']}}"> {{$hot['nomHotel']}}</option>
                           @endforeach 
                        </select>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                    <div class="form-group form-check">
                        <label class="form-check-label"> Accueil:</label>
                        <input class="form-check-input" type="radio" name="acc" id="accss" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="acc" id="accs" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="acc" id="accps" value="1"> Peu Satisfaisant
                        
                    </div>
                    
                    <div class="form-group form-check">
                        <label class="form-check-label"> Restauration:</label>
                        <input class="form-check-input" type="radio" name="res" id="resss" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="res" id="ress" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="res" id="resps" value="1"> Peu Satisfaisant
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label"> Hygiene:</label>
                        <input class="form-check-input" type="radio" name="hyg" id="hygss" value="3"> Très satisfaisant
                        <input class="form-check-input" type="radio" name="hyg" id="hygs" value="2"> Satisfaisant
                        <input class="form-check-input" type="radio" name="hyg" id="hygps"value="1"> Peu Satisfaisant
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label"> Extra:</label>
                        <input class="form-check-input" type="checkbox" name="extra1" id="extra1" value="3"> Piscine couverte
                        <input class="form-check-input" type="checkbox" name="extra2" id="extra2" name="extra1"value="2"> Plage privée
                        <input class="form-check-input" type="checkbox" name="extra3" id="extra3" value="1"> Couverture Wifi
                        
                    </div>
                    <div class="form-group form-check">
                    <label class="form-check-label"> Autres Remarques:</label>
                        <textArea  name="desc" id="comment" name="comment" placeholder="Mettez  remarques ici"></textArea>
                    </div>
                    <button type="submit" id="submitButton" class="btn btn-primary">Envoyer</button>
                </form>
        </div >
    </div>
</div>
<script>
if ($("#Formadd").length > 0) {
$("#Formadd").validate({
rules: {
hotel: {
required: true},
acc: {
required: true
},
res: {
required: true
},  
hyg: {
required: true
},  
comment: {
required: true
},  
},
messages: {
name: {
required: "SVP selectionner hôtel à évaluer"
},
acc: {
required: "SVP évaluer service accueil de l'hôtel"
},
res: {
required: "SVP évaluer service restauration de l'hôtel"
},
hyg: {
required: "SVP évaluer service hygiène de l'hôtel"
},
},
})
}
</script>
</body>
</html>
@endsection