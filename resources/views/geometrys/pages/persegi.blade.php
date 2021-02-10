@extends('geometrys.layout')
 
@section('content')
<div class="container">
<a href="/geometri" class="btn btn-primary" align="center">Kembali</a>
    <!-- menghitung luas persegi -->
    <div class="class row justify-content-around">
        <div class="card pr-2" style="width: 18rem;">
            <div class="card-body">
                <h3>Luas Persegi:</h3>
                <strong>Rumus: luas (L) = sisi (s) x sisi (s)</strong>
                <form action="./" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>sisi (s)</td>
                            <td>:</td>
                            <td><input type="text" name="a" required></td>
                        </tr>
                        <tr>
                            <td>sisi (s)</td>
                            <td>:</td>
                            <td><input type="text" name="b" required ></td>
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
                        $sisi_a = $_POST['a'];
                        $sisi_b = $_POST['b'];
                        
                        // menghitung luas persegi
                        $luas = $sisi_a * $sisi_b;

                        if ($luas == 0) {
                            echo "Ini bukan persegi";
                        } else {
                            echo "Hasil hitung luas persegi adalah sebagai berikut:<br/>";
                            echo "Diketahui:<br/>";
                            echo "sisi (s) = $sisi_a<br/>";
                            echo "sisi (s) = $sisi_b<br/>";
                            echo "Maka luas persegi adalah L = sisi x sisi = $sisi_a x $sisi_b = $luas";
                        }
                    }
                ?>
            </div>
        </div>
        <!-- menghitung keliling persegi -->
        <div class="card pr-2" style="width: 18rem;">
            <div class="card-body">
                <h3>Keliling Persegi:</h3>
                <strong>Rumus: keliling (k) = sisi (s) x 4</strong>
                <form action="./" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>sisi (s)</td>
                            <td>:</td>
                            <td><input type="text" name="sisi" required></td>
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
                        $sisi = $_POST['sisi'];
                        
                        // menghitung keliling persegi
                        $keliling = 4 * $sisi;

                        if ($keliling == 0) {
                            echo "Ini bukan persegi";
                        } else {
                            echo "Hasil hitung keliling persegi adalah sebagai berikut:<br/>";
                            echo "Diketahui:<br/>";
                            echo "sisi (s) = $sisi<br/>";
                            echo "Maka keliling persegi adalah K = 4 x sisi (s) = 4 x $sisi = $keliling";
                        }
                    }
                ?>
            </div>
        </div>
    </div>    
</div>
@endsection