<header id="header">
    {{-- <div class="header-top"> --}}
  </div>
  <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
          <a href="{{url('/')}}" style="color: #f9d700;font-size: 20px;font-weight: bold">
            <img src="{{ asset('img/logo2.png')}}" alt="" title="" width="150" height="45"/>
            {{-- TAXI4U  --}}
        </a>	
    
   {{-- <p> Your Journey, Our Priority – Taxi4U!  </p>	 --}}
          <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('services')}}">Services</a></li>
                <li><a href="{{url('gallery')}}">Gallery</a></li>
                <li class="menu-has-children"><a href="">Blog</a>
                  <ul>
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li class="menu-has-children"><a href="">Level 2</a>
                      <ul>
                        <li><a href="#">Item One</a></li>
                        <li><a href="#">Item Two</a></li>
                      </ul>
                    </li>					              
                  </ul>
                </li>						  			          	          
                <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>
          </nav><!-- #nav-menu-container -->		
      </div>
  </div>
</header><!-- #header -->