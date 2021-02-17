@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <!-- menghitung luas persegi -->
    <div class="row justify-content-around">
        <div class="card pr-2" style="">
            <div class="card-body">
                <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
                <h3>Segitiga</h3>
                <p>Segitiga adalah bangun datar yang terdiri dari 3 sisi garis lurus dengan 3 titik sudut yang berjumlah 180º.</p>
                <div class="row">
                    <div class="col-sm">
                        <strong>Rumus:</strong></br>
                        <i>luas (L) = &#189; x (alas x tinggi)</i></br>
                        <i>keliling (k) = sisi a + sisi b + sisi c</i>
                    </div>
                    <div class="col-sm">
                        <strong>Keterangan:</strong><br>
                        <i>
                            a = alas <br>
                            t = tinggi, tinggi segitiga membentuk sudut 90° terhadap alasnya.<br>
                            b, c = adalah sisi lain segitiga
                        </i>
                    </div>
                 </div>
                <br>
                <h3>Luas Segitiga</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="alas"><i>alas (a)</i><label></td>
                                <td>:</td>
                                <td><input type="number" id="alas" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="tinggi"><i>tinggi (t)</i><label></td>
                                <td>:</td>
                                <td><input type="number" id="tinggi" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button onclick="hitung1()" class="btn btn-primary mt-3">Hitung</button></td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="luas"><i>luas (L)</i><label></td>
                                <td>:</td>
                                <td><input type="text" id="luas" disabled readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
                </br>
                </br>
                <h3>Keliling Segitiga</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="a"><i>sisi (a)</i></td>
                                <td>:</td>
                                <td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="b"><i>sisi (b)</i></td>
                                <td>:</td>
                                <td><input type="number" id="b" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="c"><i>sisi (c)</i></td>
                                <td>:</td>
                                <td><input type="number" id="c" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button onclick="hitung2()" class="btn btn-primary mt-3">Hitung</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="keliling"><i>keliling (k)</i></td>
                                <td>:</td>
                                <td><input type="text" id="keliling" disabled readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
		var alas = document.getElementById('alas')
		var tinggi = document.getElementById('tinggi')
		var luas = document.getElementById('luas')
		function hitung1() {
			luas.value = 1/2 * Number(alas.value) * Number(tinggi.value)
		}
	</script>
	<script type="text/javascript">
		var a = document.getElementById('a')
		var b = document.getElementById('b')
		var c = document.getElementById('c')
		keliling = document.getElementById('keliling')
		function hitung2() {
			keliling.value = Number(a.value) + Number(b.value) + Number(c.value)
		}
	</script>

@endsection