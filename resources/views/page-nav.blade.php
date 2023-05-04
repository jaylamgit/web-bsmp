<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
  	<div class="container">
    <a class="navbar-brand" href="/"><img src="{{ asset('/static/img/blade-smp-logo.png') }}" alt="BladeSMP Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="/">Home</a>
        </li>
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @if(str_contains(Request::url(),'services')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="/services/male-pattern-baldness">Male Pattern Baldness</a></li>
			<li><a class="dropdown-item" href="/services/alopecia-areata-and-totalis">Alopecia Areata and Totalis</a></li>
			<li><a class="dropdown-item" href="/services/poor-results-from-hair-transplants">Poor Results Hair Transplants</a></li>
			<li><a class="dropdown-item" href="/services/female-pattern-hairloss">Female Pattern Hair Loss</a></li>
			<li><a class="dropdown-item" href="/services/scars-due-to-injuries-or-hair-transplants">Injuries Or Transplants Scars</a></li>
			<li><a class="dropdown-item" href="/services/beard-micropigmentation">Beard Micropigmentation</a></li>
			<li><hr class="dropdown-divider"></li> 
			<li><a class="dropdown-item" href="/services">All SMP Services</a></li> 
          </ul>
        </li> 
        <li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'about') active @endif" href="/about-us">About Us</a></li>
	<li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" href="/contact">Contact Us</a></li>
	<li class="nav-item"><a class="nav-link" href="https://bladebeauty.ca/booking/" style="background: rgb(24,37,144);color: var(--bs-white);border-radius: 6px;padding-right: 12px;padding-left: 12px;width: 105px;height: 36px;text-align: center;" target="_blank">BOOK NOW</a></li>
      </ul>
    </div>
  </div>
</nav>


