<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <i class="fa-brands fa-hive fs-5 me-3"> BlogSkuy </i>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <!-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li> -->
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-white" placeholder="Search Sini" aria-label="Search">
        </form>

        @if(!Auth::check())
        <a href= " {{ url("login") }} " class="btn btn-outline-light me-2"> Log-In </a>
        @else()
        <a href= " # " class="btn btn-outline-light me-2"> {{ Auth::user()->name }} </a>
        <a href= " {{ url("logout") }} " class="btn btn-outline-light me-2"> Log-Out </a>
        @endif
        <a href= " {{ url("register") }} " class="btn btn-outline-light me-2"> Register </a>

        </div>
      </div>
    </div>
  </header>