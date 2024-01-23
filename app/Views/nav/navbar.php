<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/nav.css" rel="stylesheet">
  <style>
    /* CSS untuk gambar profil */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" width="110" height="30" class="d-inline-block align-top" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Homepage">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forum">Forums</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Biodata">Biodata</a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
  <a href="buat" class="btn btn-primary my-2 my-sm-0 mr-2" role="button">Buat Proyek</a>
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="images/user.png" width="30" height="30" class="rounded-circle profile-image"
                alt="Profile Picture">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">User</a>
              <a class="dropdown-item" href="#">Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Home/logout">Log Out</a>
            </div>
          </div>
        </form>
      </ul>
    </div>
  </nav>

  <script src="js/nav.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>