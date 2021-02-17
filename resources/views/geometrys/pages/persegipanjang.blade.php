@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <!-- menghitung luas persegi -->
    <div class="row justify-content-around">
        <div class="card pr-2" style="">
            <div class="card-body">
                <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
                <h3>Persegi Panjang</h3>
                <p>Persegi panjang adalah bangun datar 2 dimensi yang mempunyai 2 pasang sisi sejajar yang sama Panjang dan mempunyai 4 titik sudut siku-siku.</p>
                <div class="row">
                    <div class="col-sm">
                        <strong>Rumus:</strong><br>
                        <i>luas (L) = panjang (p) x lebar (l)</i><br>
                        <i>keliling (k) = 2 x (panjang + lebar)</i>
                    </div>
                    <div class="col-sm">
                        <strong>Keterangan:</strong><br>
                        <i>
                            p = panjang <br>
                            l = lebar
                        </i>
                    </div>
                </div>
                <br>
                <h3>Luas dan Keliling Persegi Panjang</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="p"><i>panjang (p)</i></label></td>
                                <td>:</td>
                                <td><input type="number" id="p" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td><label for="l"><i>lebar (l)</i></label></td>
                                <td>:</td>
                                <td><input type="number" id="l" required min="1" minlength="1" maxlength="21"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button onclick="hitung()" class="btn btn-primary mt-3">Hitung</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="luas"><i>luas (L)</i></label></td>
                                <td>:</td>
                                <td><input type="text" id="luas" disabled readonly></td>
                            </tr>
                            <tr>
                                <td><label for="keliling"><i>keliling (k)</i></label></td>
                                <td>:</td>
                                <td><input type="text" id="keliling" disabled readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
                    var	panjang = document.getElementById('p')
                    var lebar = document.getElementById('l')
                    var	luas = document.getElementById('luas')
                    var	keliling =  document.getElementById('keliling')
                    function hitung() {
                        luas.value = Number(panjang.value) * Number(lebar.value)
                        keliling.value = 2 * (Number(panjang.value) + Number(lebar.value))
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection