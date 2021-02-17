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
        <h1>Belah Ketupat</h1>
        <h2>
          Belah Ketupat adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.
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
            <i>luas (L) = &#189; x diagonal (d1) x diagonal (d2)</i><br>
            <i>keliling (k) = 4 x sisi</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              s = sisi belah ketupat <br>
              d1, d2 = diagonal
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas Belah Ketupat</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="d1"
              id="d1"
              placeholder="Diagonal 1"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="d2"
              id="d2"
              placeholder="Diagonal 2"
            />
          </div>
          <div class="text-center">
            <button onclick="hitung1()" class="btn btn-primary">Hitung</button>
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
          </div>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Keliling Jajar Genjang </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="s"
              id="s"
              placeholder="sisi"
            />
          </div>
          <div class="text-center">
            <button onclick="hitung2()" class="btn btn-primary">Hitung</button>
          </div>
          <div class="form-row d-flex justify-content-center">
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
  var d1 = document.getElementById('d1')
  var d2 = document.getElementById('d2')
  var luas = document.getElementById('luas')
  function hitung1() {
    luas.textContent = 1/2 * Number(d1.value) * Number(d2.value)
  }
</script>
<script type="text/javascript">
  var s = document.getElementById('s')
  var keliling = document.getElementById('keliling')
  function hitung2() {
    keliling.textContent = s.value * 4
  }
</script>
@endsection
