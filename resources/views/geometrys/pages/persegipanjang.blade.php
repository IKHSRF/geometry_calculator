@extends('geometrys.layout')
 
@section('content')
<div class="container">
<a href="/geometri" class="btn btn-primary" align="center">Kembali</a>
    <div class="row justify-content-around">
        <!-- hitung luas persegi panjang -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3>Luas Persegi Panjang:</h3>
                <strong>Rumus: luas (L) = panjang (p) x lebar (l)</strong>
                <form action="./" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>panjang (p)</td>
                            <td>:</td>
                            <td><input type="text" name="p" required></td>
                        </tr>
                        <tr>
                            <td>lebar (l)</td>
                            <td>:</td>
                            <td><input type="text" name="l" required ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit1" value="Hitung"></td>
                        </tr>
                    </table>
                </form>

                <?php
                    if(isset($_POST['submit1'])){
                        $panjang = $_POST['p'];
                        $lebar   = $_POST['l'];
                        
                        // menghitung luas persegi panjang
                        $luas = $panjang * $lebar;

                        if ($luas == 0) {
                            echo "Ini bukan persegi panjang";
                        } else {
                            echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
                            echo "Diketahui:<br />";
                            echo "panjang (p) = $panjang<br />";
                            echo "lebar (l) = $lebar<br />";
                            echo "Maka luas persegi panjang adalah L = panjang (p) x lebar (l) = $panjang x $lebar = $luas";
                        }
                    }
                ?>
            </div>
        </div>
        <!-- hitung keliling persegi panjang -->
        <div class="card pr-2" style="width: 18rem;">
            <div class="card-body">
                <h3>Keliling Persegi Panjang:</h3>
                <strong>Rumus: keliling (k) = 2 x (panjang + lebar) </strong>
                <form action="./" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>panjang (p)</td>
                            <td>:</td>
                            <td><input type="text" name="panjang" required></td>
                        </tr>
                        <tr>
                            <td>Lebar (l)</td>
                            <td>:</td>
                            <td><input type="text" name="lebar" required ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit2" value="Hitung"></td>
                        </tr>
                    </table>
                </form>

                <?php
                    if(isset($_POST['submit2'])){
                        $panjang = $_POST['panjang'];
                        $lebar   = $_POST['lebar'];
                        
                        // menghitung keliling persegi panjang
                        $keliling = 2 * ($panjang + $lebar);

                        if ($keliling == 0) {
                            echo "Ini bukan persegi panjang";
                        } else {
                            echo "Hasil hitung keliling persegi panjang adalah sebagai berikut:<br />";
                            echo "Diketahui:<br />";
                            echo "panjang (p) = $panjang<br />";
                            echo "lebar (l) = $lebar<br />";
                            echo "Maka keliling persegi panjang adalah K = 2 x (panjang + lebar) = 2 x ($panjang + $lebar) = $keliling";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

</div>
@endsection