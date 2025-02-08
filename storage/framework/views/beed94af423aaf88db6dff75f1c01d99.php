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
              <?php if(auth()->guard()->check()): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profile</a>
              </li>
              <?php endif; ?>
            </ul>
            <form class="d-flex me-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <div>
              <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-light me-2">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-custom">Sign Up</a>
              <?php else: ?>
                <span class="text-light me-3">Hello, <?php echo e(Auth::user()->first_name); ?></span>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-danger">Logout</button>
                </form>
              <?php endif; ?>
            </div>
          </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\components\navbar.blade.php ENDPATH**/ ?>