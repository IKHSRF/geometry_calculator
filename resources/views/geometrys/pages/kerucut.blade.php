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
        <h1>Kerucut</h1>
        <h2>
          Kerucut adalah bangun ruang yang memiliki 2 sisi yaitu sebuah lingkaran dan sebuah bidang lengkung.
        </h2>
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
          <div class="col-sm">
            <strong>Rumus:</strong><br>
            <i>luas (L) = π × r x (r + s)</i><br>
            <i>volume (V) = 1 / 3 x π × r x r x t</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              r = jari - jari <br>
              t = tinggi <br>
              s = sisi <br>
              π = phi (22/7)
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Kerucut</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="r"
              id="r"
              placeholder="Jari - Jari"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="t"
              id="t"
              placeholder="Tinggi"
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
  var jari = document.getElementById('r')
  var tinggi = document.getElementById('t')
  var phi = 22/7


  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  function hitung() {
      luas.textContent = phi * Number(jari.value) * (Number(jari.value) +  Math.sqrt(Number(jari.value) * Number(jari.value) + Number(tinggi.value) * Number(tinggi.value)))
      keliling.textContent = 1 / 3 * phi * Number(jari.value) * Number(jari.value) * Number(tinggi.value)
  }
</script>
@endsection
