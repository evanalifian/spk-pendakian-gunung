<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data["title"] ?></title>
  <?php if (isset($data["desc"])): ?>
    <meta name="description" content="<?= $data["desc"] ?>">
  <?php endif ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
  <!-- <nav class="navbar fixed-top navbar-expand-lg">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse w-50 navbar-collapse text-secondary-emphasis bg-secondary-subtle py-2 px-3 mt-2 border rounded-4" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/dokumentasi">Dokumentasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/evanalifian/spk-pendakian-gunung" target="_blank">Source <i class="ri-arrow-right-up-line"></i></a>
          </li>
        </ul>
        <a href="/login" class="btn btn-primary">Log in</a>
      </div>
    </div>
  </nav> -->
  <div class="container d-flex flex-column row-gap-5 px-3">