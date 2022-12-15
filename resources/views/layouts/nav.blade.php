<nav class="navbar navbar-expand-lg navbar-light nav-custom">
       	<div class="container">
       		  <a class="navbar-brand logo" href="#">Hekto</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="nav justify-content-center">
			  	<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="navbarDropdown" aria-haspopup="true" aria-expanded="false">
				          Home
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Pages</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Products</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link " href="#">Blog</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link " href="#">Shop</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link " href="#">Details</a>
				      </li>
                      @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
				    </ul>
			    
			    </div>
		    </div>
		    <form class="form-inline nav justify-content-center">
		    	<div class="input-group mb-3">
		    		<input type="text" class="form-control" aria-label="search" aria-describedby="button-addon2">
		    		<div class="input-group-append">
		    			<button class="btn  search-bg" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
		  			</div>
				</div>
		    </form>
            
    	</div>
	</nav>