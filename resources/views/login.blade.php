@extends('master')
@section('content')
<div class="container custom-login"> 
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">addresse Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
                <button type="submit" class="btn btn-default">s'identifier</button>
            </form>
        </div >
    </div>
</div>
@endsection