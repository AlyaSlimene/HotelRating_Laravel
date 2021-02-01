@extends('master')
@section('content')
<div class="container custom-login"> 
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
            <form action="enregistrer" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom </label>
                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prenom </label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Votre prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Email </label>
                <input type="mail" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">N° Télèphone </label>
                <input type="text" name="numtel" class="form-control" id="exampleInputEmail1" placeholder="Votre numéro de téléphone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
                <button type="submit" class="btn btn-default">S'enregistrer</button>
            </form>
        </div >
    </div>
</div>
@endsection