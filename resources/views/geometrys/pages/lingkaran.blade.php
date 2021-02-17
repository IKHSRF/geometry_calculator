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
        <h1>Lingkaran</h1>
        <h2>
          Lingkaran adalah bangun datar dua dimensi dibentuk oleh himpunan semua titik yang mempunyai jarak sama dari suatu titik tetap.
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
            <i>luas (L) = π x r<sup>2</sup></i><br>
            <i>keliling (K) = π x 2 x r</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              P = titik pusat <br>
              r = jari-jari <br>
              d = diameter <br>
              π = konstanta pi (3.14) <br>
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas & Keliling Lingkaran</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="r"
              id="r"
              placeholder="Jari Jari"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="d"
              id="d"
              placeholder="Diameter"
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
                  <h4>Keliling</h4>
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
  var pi7 = 22/7
  // var pi = 3.14
  var jarijari = document.getElementById('r')
  var diameter = document.getElementById('d')
  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  function hitung() {
      diameter.value = jarijari.value * 2
      luas.textContent = pi7 * Number(jarijari.value * jarijari.value)
      // luas.value = pi * Number(jarijari.value * jarijari.value)
      keliling.textContent = pi7 * 2 * Number(jarijari.value) 
  }
</script>
@endsection
