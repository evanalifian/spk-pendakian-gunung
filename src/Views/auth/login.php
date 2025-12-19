<div style="height: 100vh;" class="row justify-content-center align-items-center">
  <div class="col-sm-5">
    <h1 class="mb-4">Log in</h1>
    <?php if (isset($data["error"])): ?>
      <div class="alert alert-danger" role="alert">
        <?= $data["error"] ?>
      </div>
    <?php endif ?>
    <form action="/login" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <button type="submit" class="w-100 btn btn-primary">Submit</button>
    </form>
    <hr>
    <p>Belum punya akun? <a href="/signup">Register</a></p>
  </div>
</div>