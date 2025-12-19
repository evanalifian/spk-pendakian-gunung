<div class="row pt-5 mt-5">
  <div class="col-sm-8">
    <section class="mb-5">
      <h1 id="dokumentasi-studi-kasus">Dokumentasi Studi Kasus</h1>
      <p>Kami menggunakan jurnal <a href="/docs/reference_journal" download>Sistem Pendukung Keputusan Untuk Menentukan Pendakian Gunung Terbaik Di Jawa Tengah Menggunakan Metode SAW (SImple Additive Weighting)</a>, sebagai referensi untuk membuat sistem pendukung keputusan berbasis <i>website</i>.</p>
      <hr>
    </section>
    <section class="mb-5">
      <section class="mb-4">
        <h2 id="metode">Metode</h2>
        <p>Metode yang kami gunakan adalah SAW <i>(Simple Additive Weighting)</i>, yaitu dengan cara menjumlahkan bobot dari setiap alternatif berdasarkan kriteria yang telah ditentukan.</p>
      </section>
      <section class="mb-4">
        <h3 id="kriteria-metode">Kriteria Metode</h3>
        <p>Berikut beberapa kriteria dan bobotnya penentuan pendakian gunung terbaik di Jawa Tengah:</p>
        <ol class="list-group list-group-numbered">
          <?php foreach ($data["criterias"] as $criteria): ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><?= $criteria["criteria_code"] ?></div>
                <?= $criteria["criteria_desc"] ?>
              </div>
              <span class="badge text-bg-primary rounded-pill">Bobot: <?= $criteria["criteria_weight"] ?></span>
            </li>
          <?php endforeach ?>
        </ol>
      </section>
      <section class="mb-4">
        <h3 id="alternatif">Alternatif</h3>
        <p>Berikut data alternatif (untuk saat ini) yang digunakan pada SPK:</p>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th colspan="6" class="text-center">Data Alternatif</th>
              </tr>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Alternatif</th>
                <th scope="col">Biaya (Rp)</th>
                <th scope="col">Durasi (Jam)</th>
                <th scope="col">Sumber Mata Air</th>
                <th scope="col">Popularitas</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach ($data["alternative"] as $alternative): ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $alternative["alternative_name"] ?></td>
                  <td><?= $alternative["alternative_cost"] ?></td>
                  <td><?= $alternative["alternative_duration"] ?></td>
                  <td><?= $alternative["alternative_springs"] ?></td>
                  <td><?= $alternative["alternative_rating"] ?></td>
                </tr>
                <?php $no++ ?>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </section>
      <hr>
    </section>
    <section class="mb-5">
      <h2 id="normalisasi-atribut-cost">Normalisasi Atribut Cost</h2>
      <p class="fs-4">\[R_{ij} = \frac{\min(X_j)}{X_{ij}}\]</p>
      <div>
        <p>Digunakan untuk:</p>
        <ol>
          <li>Biaya (K1)</li>
          <li>Durasi (K2)</li>
        </ol>
        <p>Artinya, alternatif dengan nilai terkecil akan memperoleh nilai normalisasi tertinggi.</p>
      </div>
      <hr>
    </section>
    <section class="mb-5">
      <h2 id="normalisasi-atribut-benefit">Normalisasi Atribut Benefit</h2>
      <p class="fs-4">\[R_{ij} = \frac{X_{ij}}{\max(X_j)}\]</p>
      <div>
        <p>Digunakan untuk:</p>
        <ol>
          <li>Sumber Mata Air (K3)</li>
          <li>Rating (K4)</li>
        </ol>
        <p>Artinya, alternatif dengan nilai terbesar akan memperoleh nilai normalisasi tertinggi.</p>
      </div>
      <hr>
    </section>
    <section class="mb-5">
      <h2 id="perhitungan-nilai-preferensi">Perhitungan Nilai Preferensi</h2>
      <p>Nilai preferensi dihitung dengan menjumlahkan hasil perkalian nilai normalisasi dengan bobot kriteria:</p>
      <p class="fs-4">\[V_i = \sum_{j=1}^{n} w_j \times R_{ij}\]</p>
      <p>Keterangan:</p>
      <ol>
        <li><i>Vi</i>= nilai preferensi alternatif ke-i</li>
        <li><i>wj</i>= bobot kriteria ke-j</li>
        <li><i>Rij</i> = nilai normalisasi</li>
      </ol>
      <p>Alternatif dengan nilai preferensi terbesar merupakan alternatif terbaik.</p>
    </section>
  </div>
  <div class="col-sm-4">
    <?php require_once __DIR__ . "/table_of_content.php" ?>
  </div>
</div>