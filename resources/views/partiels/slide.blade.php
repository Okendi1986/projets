<!-- Nav Starts -->
<div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right scroll">
      <li class="active"><a href="{{ route('master') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('works') }}">Nouveaux Voitures</a></li>
      <li><a href="{{ route('services') }}">Services</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>

      @guest
         <li><a href="{{ route('login') }}">Se connecter</a></li>
         <li><a href="{{ route('signup') }}">S'inscrire</a></li>
      @endguest

      @auth
         <li><a href="{{ route('dashboard') }}">Mon Compte</a></li>
         <li>
             <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 Logout
             </a>
         </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
      @endauth

      <!-- Dropdown for Language Selection -->
      <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="caret"></span></a>
         <ul class="dropdown-menu">
             <li><a href="?lang=en">English</a></li>
             <li><a href="?lang=fr">Français</a></li>
         </ul>
      </li>
   </ul>
</div>
<!-- #Nav Ends -->
