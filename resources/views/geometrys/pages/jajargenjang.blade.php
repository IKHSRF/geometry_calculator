@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <!-- menghitung luas persegi -->
    <div class="row justify-content-around">
        <div class="card pr-2" style="">
            <div class="card-body">
                <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
                <h3>Jajar Genjang</h3>
                <p>Jajar genjang adalah bangun datar 2 dimensi yang tersusun oleh 2 pasang sisi yang sama panjang dan sejajar serta mempunyai 2 pasang sudut yang sama besar (pasangan sudut lancip dan pasangan sudut tumpul).</p>
                <div class="row">
                    <div class="col-sm">
                        <strong>Rumus: </strong><br>
                        <i>luas (L) = alas (a) x tinggi (t)</i><br>
                        <i>keliling (k) = 2 x (sisi alas + sisi miring)</i>
                    </div>
                    <div class="col-sm">
                        <strong>Keterangan:</strong><br>
                        <i>
                            a = sisi alas <br>
                            b = sisi miring <br>
                            t = tinggi
                        </i>
                    </div>
                 </div>
                <br>
                <h3>Luas Jajar Genjang</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="alas"><i>alas (a)</i></td>
                                <td>:</td>
                                <td><input type="number" id="alas" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="tinggi"><i>tinggi (t)</i></td>
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
                                <td><label for="luas"><i>luas (L)</i></td>
                                <td>:</td>
                                <td><input type="text" id="luas" disabled readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <br>
                <h3>Keliling Jajar Genjang</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="a"><i>sisi alas (a)</i></td>
                                <td>:</td>
                                <td><input type="number" id="a" min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="b"><i>sisi miring (b)</i></td>
                                <td>:</td>
                                <td><input type="number" id="b" min="1" minlength="1" maxlength="21"></td>
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
		var tinggi =  document.getElementById('tinggi')
		var luas = document.getElementById('luas')
		function hitung1() {
			luas.value	 = Number(alas.value) * Number(tinggi.value)
		}
	</script>
	<script type="text/javascript">
		var a = document.getElementById('a')
		var b = document.getElementById('b')
		var keliling = document.getElementById('keliling')
		function hitung2() {
			keliling.value = 2 * (Number(a.value) + Number(b.value))
		}
	</script>
@endsection