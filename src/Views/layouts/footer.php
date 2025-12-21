  </div>
  <?php if (isset($_SESSION["auth"])): ?>
    <footer class="mt-5 pt-5">
      <div class="container py-3 mt-5 border-top">
        <div class="row">
          <div class="col">
            <p class="text-secondary">&copy; <?= $data["copyright"] ?>, All Rights Reserved.</p>
          </div>
          <div class="col text-end">
            <a href="" class="link-secondary link-underline link-underline-opacity-0">Available on <i class="ri-github-fill"></i></a>
          </div>
        </div>
      </div>
    </footer>
  <?php endif ?>
  <?php if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] === "/dokumentasi"): ?>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <?php endif ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>