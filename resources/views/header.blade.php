<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Hotel Rating</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home </a></li>
        <li class=""><a href="/rating">Rating</a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Chercher Hotel</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
         @if(Session::has('user'))   
        <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['nom'].Session::get('user')['prenom']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Se deconnecter</a></li>
          
          </ul>
          </li>
          @else
          <li><a href="/login">S'identifier</a></li>
          @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>