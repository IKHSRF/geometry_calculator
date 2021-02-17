@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <!-- menghitung luas persegi -->
    <div class="row justify-content-around">
        <div class="card pr-2" style="">
            <div class="card-body">
                <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
                <h3>Persegi</h3>
                <p>Persegi adalah bangun datar 2 dimensi yang dibentuk oleh empat sisi yang sama panjang dan keempat titik sudutnya membentuk sudut siku-siku (90º).</p>
                <div class="row">
                    <div class="col-sm">
                        <strong>Rumus:</strong><br>
                        <i>luas (L) = sisi (s) x sisi (s)</i><br>
                        <i>keliling (k) = sisi (s) x 4</i>
                    </div>
                    <div class="col-sm">
                        <strong>Keterangan: </strong><br>
                        <i>s = sisi persegi</i>
                    </div>
                 </div>
                <br>
                <h3>Luas dan Keliling Persegi</h3>
                <div class="row">
                    <div class="col-sm">
                        <table>
                            <tr>
                                <td><label for="s"><i>sisi (s)</i></label></td>
                                <td>:</td>
                                <td><input type="number" id="s" required min="1" minlength="1" maxlength="21"></td>
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
                                <td><label for="luas"><i>luas (L)</i></label></i></td>
                                <td>:</td>
                                <td><input type="text" id="luas" disabled readonly></td>
                            </tr>
                            <tr>
                                <td><label for="keliling"><i>keliling (k))</i></label><i></i></td>
                                <td>:</td>
                                <td><input type="text" id="keliling" disabled readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
                    var sisi = document.getElementById('s')
                    var luas = document.getElementById('luas')
                    var keliling = document.getElementById('keliling')
                    function hitung() {
                        luas.value = Number(sisi.value) * Number(sisi.value)
                        keliling.value = Number(sisi.value) * 4
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection