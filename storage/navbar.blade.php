

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('vcl.index') }}">VEHICLE INDEX</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MAINTENANCE
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Request Maintenance</a></li>
              <li><a class="dropdown-item" href="#">Evaluation</a></li>
              <li><a class="dropdown-item" href="#">Sparepart</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Post Maintenance Experiance</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">COAST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">REPORTS</a>
          </li>

          
        
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>