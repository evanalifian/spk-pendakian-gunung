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
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top border border-bottom">
    <div class="container">
      <a class="navbar-brand" href="/">SPK-Pendakian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="/dokumentasi">Dokumentasi</a>
          <a class="nav-link" href="https://github.com/evanalifian/spk-pendakian-gunung" target="_blank">Source <i class="ri-arrow-right-up-line"></i></a>
        </div>
        <?php if (isset($_SESSION["auth"])): ?>
          <div class="d-flex align-items-center column-gap-3">
            <span><?= $_SESSION["auth"]["username"] ?></span>
            <div class="dropdown">
              <button class="border border-0 bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fs-5 ri-menu-line"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li class="dropdown-item">
                  <a href="/logout" class="w-100 btn btn-sm btn-outline-danger">Log out</a>
                </li>
              </ul>
            </div>
          </div>
        <?php else: ?>
          <div class="d-flex column-gap-2">
            <a href="/login" class="btn btn-sm">Log in</a>
            <a href="/signup" class="btn btn-outline-primary btn-sm">Sign up</a>
          </div>
        <?php endif ?>
      </div>
    </div>
  </nav>
  <div class="container d-flex flex-column row-gap-5 px-3 pt-5">