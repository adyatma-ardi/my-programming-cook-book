<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?= $data["judul"]; ?> </title>
        <style media="screen">
            #my-nav-link {
                color:white;
            }
        </style>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="m-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>/home/index"><b>MVC Application</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" id="my-nav-link" href="<?= BASEURL; ?>/mahasiswa/index">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="my-nav-link" href="<?= BASEURL; ?>/about/index">About</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
