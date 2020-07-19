    {{-- <!-- Top Bar --> --}}






          {{-- <!-- Navbar --> --}}



          <nav class="navbar navbar-expand-lg px-lg-0 navbar-light bg-light main-navbar-light sticky-top">
            <div class="container position-relative">
              {{-- <!-- Navbar Brand--> --}}
              <a href="{{url('/')}}" class="navbar-brand">

                <img  style="width: 12rem;height:4rem" class="logo-navbar" src="{{asset('/img/logos/Group 2.png')}}" alt="logo">


            </a>
              {{-- <!-- Toggle Button--> --}}
              <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu <i class="fa fa-bars"></i></button>
              {{-- <!-- Navbar Menu--> --}}
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto align-items-lg-center">

                  <div class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></div>
                  <div class="nav-item"><a href="{{url('/processes')}}" class="nav-link">Processes</a></div>

                <div class="nav-item"><a href="{{route('projects.index')}}" class="nav-link">Projects</a></div>
                <div class="nav-item active"><a href="{{url('/blog')}}" class="nav-link">Blog</a></div>
                <div class="nav-item"><a href="{{url('/careers')}}" class="nav-link">Careers</a></div>
                  <div class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">About Us</a></div>
                  <div class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link">Contact Us</a></div>
                  <div class="nav-item">
                    <ul class="list-inline">
                    <li class="list-inline-item">
                            {{-- <button type="button" class="btn btn-white btn-quote" >GEt A QUOTE</button> --}}
                            <button id="navbarCategory" class="nav-link text-center  btn btn-sm btn-unique btn-quote"
                            data-toggle="modal" data-target="#myModal">GET QUOTE</button>
                    </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>

