<html>

<head>
    @include('dashboard.layout.header')
    
</head>

<body>

  <div class="app-body">

    <aside class="app-sidebar">
      <div class="app-logo "> Dashboard</div>
      @include('dashboard.layout.sidebar')
    </aside>

    <header class="app-header">
      <ul class="nav app-header-right-menu">
        <li class="top-nav-item">
            <p class="nav-link">Hello, {{ Auth::user()->name }}</p>
        </li>
        <li class="top-nav-item">
          <a class="nav-link" href="{{route('dashboard.logout')}}">Sign out</a>
        </li>
      </ul>
    </header>

    <main class="app-main">
        @include('dashboard.layout.partial.alet')
      @yield('content')
    </main>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>