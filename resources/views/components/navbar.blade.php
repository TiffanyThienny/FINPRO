<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: #343a40; /* Warna gelap */
    }

    .nav-link, .navbar-brand {
      color: #ffffff !important;
    }

    .nav-link:hover {
      color: #f8d210 !important; /* Warna emas saat hover */
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-toggler-icon {
      filter: invert(1);
    }

    .btn-custom {
      background-color: #f8d210;
      color: #343a40;
    }

    .btn-custom:hover {
      background-color: #ffcc00;
    }

    .profile-img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
      object-fit: cover;
      margin-left: 10px;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="https://i.pinimg.com/736x/b4/48/b6/b448b6f8364e00319bcfcc6e04737006.jpg" 
                 alt="Logo" class="profile-img">
            MyApp
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
              </li>
              @endauth
            </ul>
            <form class="d-flex me-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <div>
              @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-custom">Sign Up</a>
              @else
                <span class="text-light me-3">Hello, {{ Auth::user()->first_name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
                </form>
              @endguest
            </div>
          </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
