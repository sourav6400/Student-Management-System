<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title','Student Management')
    </title>
    <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\parsley.css') }}">

  </head>
  <body>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Management</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('create') }}">Create</a></li>
              <!-- <li><a href="#">Contact</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              @if(Auth::check())
                <li class="active"><a href="{{ route('home') }}">Dashbord</a></li>
              @else
                <li class="active"><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
              @endif
              
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="container">
        @yield('content');
      </div>

    <script type="text/javascript" src="{{ asset('bootstrap\css\bootstrap.min.css') }}"></script>
    <script type="text/javascript" src="{{ asset('js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\parsley.min.js') }}"></script>


  </body>
</html>
