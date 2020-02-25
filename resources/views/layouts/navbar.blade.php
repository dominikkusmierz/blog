<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Strona główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Stwórz post</a>
            </li>

            @if($flash=session('message'))
            <li class="nav-item">
                <span class="nav-link" id='alert'>{{$flash}}</span>
            </li>
            @endif
            {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
            {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
        
            
        
        </ul>

        @if(!Auth::check())
        <form class="form-inline my-2 my-lg-0">

            <button class="btn btn-outline-primary">
                <a href="/register">
                    Zarejestruj
                </a>
            </button>

            <button class="btn btn-outline-success" style="margin-left:10px;">
                <a href="/login">
                    Zaloguj
                </a>
            </button>
        </form>
        @endif

        @if(Auth::check())
        <div class="form-inline my-2 my-lg-0">
           <span id="user">{{Auth::user()->name}}</span>
            <a href="/logout" class="nav-link-ml"> Wyloguj</a>            
        </div>
        @endif
    </div>
</nav>