@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <!-- menghitung luas persegi -->
    <div class="row justify-content-around">
        <div class="card pr-2" style="">
            <div class="card-body">
                <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
                <h3>Belah Ketupat</h3>
                <p>Belah Ketupat adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.</p>
                <div class="row">
                    <div class="col-sm">
                        <strong>Rumus:</strong><br>
                        <i>luas (L) = &#189; x diagonal (d1) x diagonal (d2)</i><br>
                        <i>keliling (k) = 4 x sisi</i>
                    </div>
                    <div class="col-sm">
                        <strong>Keterangan: </strong><br>
                        <i>
                        s = sisi belah ketupat <br>
                        d1, d2 = diagonal
                        </i>
                    </div>
                 </div>
                <br>
                <h3>Luas Belah Ketupat</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="d1"><i>diagonal (d1)</i></td>
                                <td>:</td>
                                <td><input type="number" id="d1" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="d2"><i>diagonal (d2)</i></td>
                                <td>:</td>
                                <td><input type="number" id="d2" required min="1" minlength="1" maxlength="21"></td>
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
                <h3>Keliling Belah Ketupat</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="s"><i>sisi (s)</i></td>
                                <td>:</td>
                                <td><input type="number" id="s" required min="1" minlength="1" maxlength="21"></td>
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
		var d1 = document.getElementById('d1')
		var d2 = document.getElementById('d2')
		var luas = document.getElementById('luas')
		function hitung1() {
			luas.value = 1/2 * Number(d1.value) * Number(d2.value)
		}
	</script>
	<script type="text/javascript">
		var s = document.getElementById('s')
		var keliling = document.getElementById('keliling')
		function hitung2() {
			keliling.value = s.value * 4
		}
	</script>
@endsection