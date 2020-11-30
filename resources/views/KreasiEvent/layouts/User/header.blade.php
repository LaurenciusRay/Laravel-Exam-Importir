<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{route('home.user')}}" id="logonavbar">KreasiCreatorEvent</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
      <ul class="navbar-nav md-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home.user')}}" id="a-navbar">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pendaftaran
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('pendaftaran.index')}}">Pendaftaran Event</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ft" id="a-navbar" id="contact_us">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>