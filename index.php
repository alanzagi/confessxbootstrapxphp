<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Confess Project by AxC</title>
  <link rel="icon" href="https://i.pinimg.com/736x/e0/d4/23/e0d423f7e1f208be0ac824977e5a04bb.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1;
    }
  </style>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-lg bg-transparent z-1 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">AxC Inc.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-white" href="https://alanzagi.github.io/">Tentang Kami</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <main class="container-fluid bg-imgelaina1 position-relative ps-4">
    <div class="row h-100 align-items-center">
      <div class="col-md-6">
        <h1 class="fs-1 pt-7 pb-5 text-white">AxC Inc.</h1>
        <h1 class="fs-1 font-monospace text-white">Say anything without anyone knowing</h1>
        <p class="fs-5 font-monospace text-white">Easy and free to use</p>
        <button type="button" class="btn btn-primary btn-lg mt-1" onclick="WarpToConfess()">Click to continue</button>
      </div>
    </div>
  </main>

  <script>
    function WarpToConfess() {
      window.location.href = 'confess.php';
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>