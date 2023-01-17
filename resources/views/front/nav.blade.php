<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="index.html">
      <span>
        Feane
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mx-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="{{route('home.index')}}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('menus.index')}}">Menu</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{route('about.index')}}">About<span class="sr-only">(current)</span> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('reservations.index')}}">Reservation</a>
        </li>
      </ul>

    </div>
  </nav>
