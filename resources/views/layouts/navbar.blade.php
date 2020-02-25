<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="#"><i class="fas fa-blog"></i> {{config('app.name')}}</a>
    
    {{-- Rozwijanie menu  --}}
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


            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/posts/user/{{Auth::user()->id}}">Moje posty</a>
            </li>
            @endif

                {{-- Alerty --}}
            @if($flash=session('message'))
            <li class="nav-item">
                <span class="nav-link" id='alert'>{{$flash}}</span>
            </li>
            @endif


        </ul>

            {{-- Logowanie --}}
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


            {{-- Wyświetlanie użytkownika oraz wylogowywanie --}}
        @if(Auth::check())
        <div class="form-inline my-2 my-lg-0">
            <span id="user">{{Auth::user()->name}}</span>
            <a href="/logout" class="btn btn-secondary"> Wyloguj</a>
        </div>
        @endif
    </div>
</nav>