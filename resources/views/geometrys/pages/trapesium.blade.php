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
        <h1>Trapesium</h1>
        <h2>
          Trapesium adalah bangun datar dua dimensi yang tersusun oleh 4 buah sisi yaitu 2 buah sisi sejajar yang tidak sama panjang dan 2 buah sisi lainnya.
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
            <i>luas (L) = &#189; x (a + b) x t</i><br>
            <i>keliling (K) = AB + BC + CD + DA</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              t = tinggi trapesium <br>
              a, b = adalah sisi yang sejajar, sisi a merupakan panjang AB dan sisi b merupakan panjang DC
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas Trapesium</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="a"
              id="a"
              placeholder="Sisi sejajar (a)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="b"
              id="b"
              placeholder="Sisi sejajar (b)"
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
          <strong>Keliling Trapesium </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="ab"
              id="ab"
              placeholder="sisi (AB)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="bc"
              id="bc"
              placeholder="sisi (BC)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="cd"
              id="cd"
              placeholder="sisi (CD)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="da"
              id="da"
              placeholder="sisi (CA)"
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
  var a = document.getElementById('a')
  var b = document.getElementById('b')
  var t = document.getElementById('t')
  var luas = document.getElementById('luas')
  
  function hitung1() {
      luas.textContent = 1/2 * (Number(a.value) + Number(b.value)) * t.value
  }
</script>
<script type="text/javascript">
  var ab = document.getElementById('ab')
  var bc = document.getElementById('bc')
  var cd = document.getElementById('cd')
  var da = document.getElementById('da')
  var keliling = document.getElementById('keliling')
  function hitung2() {
      keliling.textContent = Number(ab.value) + Number(bc.value) + Number(cd.value) + Number(da.value)
  }
</script>
@endsection
