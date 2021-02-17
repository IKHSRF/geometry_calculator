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
        <h1>Segitiga</h1>
        <h2>
          Segitiga adalah bangun datar yang terdiri dari 3 sisi garis lurus
          dengan 3 titik sudut yang berjumlah 180º.
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
            <strong>Rumus:</strong></br>
            <i>luas (L) = &#189; x (alas x tinggi)</i></br>
            <i>keliling (k) = sisi a + sisi b + sisi c</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              a = alas <br>
              t = tinggi, tinggi segitiga membentuk sudut 90° terhadap alasnya.<br>
              b, c = adalah sisi lain segitiga
          </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas Segitiga </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="alas"
              id="alas"
              placeholder="Alas"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="tinggi"
              id="tinggi"
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
          <strong>Keliling Segitiga </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="a"
              id="a"
              placeholder="sisi (a)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="b"
              id="b"
              placeholder="sisi (b)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="c"
              id="c"
              placeholder="sisi (c)"
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
  var alas = document.getElementById('alas')
  var tinggi = document.getElementById('tinggi')
  var luas = document.getElementById('luas')
  function hitung1() {
    luas.textContent = 1/2 * Number(alas.value) * Number(tinggi.value)
  }
</script>
<script type="text/javascript">
  var a = document.getElementById('a')
  var b = document.getElementById('b')
  var c = document.getElementById('c')
  keliling = document.getElementById('keliling')
  function hitung2() {
    keliling.textContent = Number(a.value) + Number(b.value) + Number(c.value)
  }
</script>
@endsection
