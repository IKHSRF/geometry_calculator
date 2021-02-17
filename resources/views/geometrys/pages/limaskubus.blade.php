@extends('geometrys.layout') @section('header')
<section id="hero" class="d-flex align-items-center">
  <div
    class="container position-relative"
    data-aos="fade-up"
    data-aos-delay="100"
  >
    <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Limas Kubus</h1>
      </div>
    </div>
  </div>
</section>
@endsection @section('content')
<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div class="row">
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Limas Kubus</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="s"
              id="s"
              placeholder="Sisi"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="tl"
              id="tl"
              placeholder="Tinggi Limas"
            />
          </div>
          <div class="text-center">
            <button onclick="hitung()" class="btn btn-primary">Hitung</button>
          </div>
          <div class="form-row d-flex justify-content-center">
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Luas</h4>
                  <p id="luas"></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Volume</h4>
                  <p id="keliling"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<script type="text/javascript">
  var sisi = document.getElementById('s')
  var tinggi = document.getElementById('tl')
  var luas_alas_persegi
  var vlimas
  var tinggi_limas
  var luas_segitiga
  var lsegitiga
  var h
  var llimastiga
  var ts
  var ll

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  function hitung() {
      luas_alas_persegi = Number(sisi.value) * Number(sisi.value)
      vlimas = 1 / 3 * luas_alas_persegi * Number(tinggi.value)
      tinggi_limas = Number(tinggi.value) * Number(tinggi.value)
      luas_segitiga = (1/2 * Number(sisi.value)) * (1/2 * Number(sisi.value))
      lsegitiga = luas_segitiga + tinggi_limas
      h = Math.sqrt(lsegitiga)
      llimastiga = luas_alas_persegi + 4 * lsegitiga
      ts = 4 * (1/2 * Number(sisi.value) * h)
      ll = luas_alas_persegi + ts

      luas.textContent = ll
      keliling.textContent = vlimas
  }
</script>
@endsection
