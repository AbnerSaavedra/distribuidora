<nav class="navbar navbar-default">
  <div class="container-fluid col-md-11 col-md-offset-1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('admin.usuarios.index')}}">Usuarios</a></li>
        <li><a href="{{route('admin.materiales.index')}}">Materiales</a></li>
        <li><a href="{{route('admin.clientes.index')}}">Clientes</a></li>
        <li><a href="{{route('admin.vendedores.index')}}">Vendedores</a></li>
        <li><a href="{{route('admin.dptos.index')}}">Dptos.</a></li>
      </ul>
        
        <div class="col-md-4 col-md-offset-2">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar material...">
        </div>
        <!--<button type="submit" class="btn btn-default">Submit</button>-->
        <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
      </form>
      </div>
       <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>