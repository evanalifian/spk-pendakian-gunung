<div class="row py-5 mt-5">
  <div class="col-sm-10 d-flex flex-column row-gap-2">
    <h1 class="display-3 fw-medium"><?= $data["title"] ?></h1>
    <p class="fs-5 text-secondary"><?= $data["desc"] ?></p>
    <a href="/login" class="btn btn-sm btn-primary fw-medium align-self-start">Mulai perangkingan</a>
  </div>
</div>
<div class="row row-gap-4 py-5 mt-5">
  <div class="col-sm-4">
    <h2 class="fw-normal">Tim Pengembang</h2>
    <p class="text-secondary">Kami menganalisis, mengembangkan, dan menyampaikan data.</p>
  </div>
  <div class="col-sm-8">
    <div class="container">
      <div class="row row-cols-2">
        <?php foreach ($data["members"] as $member): ?>
          <div class="col">
            <figure class="d-flex align-items-center column-gap-3">
              <img src="../../public/member/<?= $member["profile"] ?>" alt="<?= $member["name"] ?>" width="82"
                class="img-thumbnail rounded-circle">
              <figcaption class="d-flex flex-column">
                <span class="fw-medium"><?= $member["name"] ?></span>
                <span class="text-secondary"><?= $member["role"] ?></span>
              </figcaption>
            </figure>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>